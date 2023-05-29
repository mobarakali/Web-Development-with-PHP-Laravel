# মডিউল ১৫ এর এসাইনমেন্ট

Assignment: Laravel Concepts Assessment


Instructions:


Complete the following coding tasks independently. 
Implement the tasks using Laravel framework and follow best practices.
Submit your solution within the given time frame.


### Task 1: Request Validation

Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:

name: required, string, minimum length 2.

email: required, valid email format.

password: required, string, minimum length 8.

### Ans: 

#1 In the routes/web.php file we need to add the following route for the registration form:

```
Route::get('/register', 'RegistrationController@showForm');
Route::post('/register', 'RegistrationController@register');
```
 
#2 Create a new controller named RegistrationController using the following command:
```
php artisan make:controller RegistrationController
```

#3 update app/Http/Controllers/RegistrationController.php using below code 
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Process the registration logic here
        
        return 'Registration successful!';
    }
}
```

#4 In the resources/views need to create a new file named register.blade.php and fill it with folloing code
```
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form method="POST" action="/register">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
```
#5 Run the server using folloin code
```
php artisan serve
```

### Task 2: Request Redirect
Create a route /home that redirects to /dashboard using a 302 redirect.

### Ans: 

#1 In the Laravel project we need to open the routes/web.php file and add the following route definition:
```
Route::get('/home', function () {
    return redirect('/dashboard');
});
```
This will access the /home route in the application, it will redirect to the /dashboard route using a 302 redirect.

### Task 3: Global Middleware
Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.

### Ans:  
To create a global middleware in Laravel that logs the request method and URL for every incoming request to the Laravel log file, follow these steps:

#1 First in the laraval root dir we have to run the folling command to generate a new middleware:
```
php artisan make:middleware LogRequestMiddleware
```
#2 in the newly created file app/Http/Middleware/LogRequestMiddleware.php. We need to update the handle method in the LogRequestMiddleware class with the following code and save
```
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestMiddleware
{
    public function handle($request, Closure $next)
    {
        // Log the request method and URL
        Log::info('Request: ' . $request->method() . ' ' . $request->fullUrl());

        return $next($request);
    }
}

```
#3 In app/Http/Kernel.php we need to find the $middleware property in the Kernel class and add the fully qualified class name of the LogRequestMiddleware to the $middleware array. Please note, this should be added at the beginning of the array to ensure it runs for every request.

```
protected $middleware = [
    \App\Http\Middleware\LogRequestMiddleware::class,
    // Other middlewares...
];

```
We need to make sure that your Laravel application has the appropriate write permissions for this task. 

### Task 4: Route Middleware
Create a route group for authenticated users only. This group should include routes for /profile and /settings. Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.
### Ans: 
To create a route group for authenticated users only in Laravel, which includes routes for /profile and /settings and applies a middleware called AuthMiddleware to ensure only authenticated users can access these routes, We have to follow these steps:
#1 in the routes/web.php we need to add the following code to create a route group and apply the AuthMiddleware middleware:
```
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        // Route logic for profile
    });

    Route::get('/settings', function () {
        // Route logic for settings
    });

    // Other routes for authenticated users
});

```


### Task 5: Controller
Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:


index(): Display a list of all products.

create(): Display the form to create a new product.

store(): Store a newly created product.

edit($id): Display the form to edit an existing product.

update($id): Update the specified product.

destroy($id): Delete the specified product.

### Ans:
 #1 Run the following command to generate the ProductController:

```
php artisan make:controller ProductController --resource
```
#2 Open the app/Http/Controllers/ProductController.php and replace the content of the file with the following code:
```
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            // Add validation rules for other fields
        ]);

        $product = Product::create($request->all());

        // Redirect to the product's details page or any other desired location
        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            // Add validation rules for other fields
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        // Redirect to the product's details page or any other desired location
        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect to the product listing or any other desired location
        return redirect()->route('products.index');
    }
}
```
Make sure to define the necessary routes in the routes/web.php file to map these controller actions to appropriate URLs.


### Task 6: Single Action Controller
Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the form submission and send an email to a predefined address with the submitted data.

### Ans 
#1 Run the following command to generate the ContactController:
 ```
php artisan make:controller ContactController --invokable
```
#2 Open the app/Http/Controllers/ContactController.php file and Replace the content of the file with the following code:
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'message']);

        // Send email to predefined address
        Mail::to('contact@example.com')->send(new ContactFormEmail($data));

        // You can perform additional actions here, such as saving the form data to a database

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

```
The ContactController class in the provided code is created as a controller with only one action, handled by the "__invoke()" method. This method is responsible for processing the form submission and sending an email to the address specified as "contact@example.com" using Laravel's Mail facade. The data submitted through the form is also passed on to the ContactFormEmail mailable class.



### Task 7: Resource Controller
Create a resource controller called PostController that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.
### Ans:

To create a resource controller called PostController in Laravel that handles CRUD operations for a resource called Post and provides the necessary methods for resourceful routing conventions, follow steps are need:

#1 Run the following command to generate the PostController:
```
php artisan make:controller PostController --resource
```
#2 In the app/Http/Controllers/PostController.php and the following code:
```
<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::create($request->all());

        // Redirect to the post's details page or any other desired location
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        // Redirect to the post's details page or any other desired location
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect to the post listing or any other desired location
        return redirect()->route('posts.index');
    }
}
```
To proceed, ensure that your app has a Post model defined in app/Models/Post.php, and corresponding views, such as index.blade.php, create.blade.php, show.blade.php, etc., in the resources/views/posts directory. Once this is done, define the routes in the routes/web.php file using the Route::resource() method to map the controller actions to the appropriate URLs. Here is an example of how you can define the resourceful routes for the PostController:

```
Route::resource('posts', 'PostController');

```
 


### Task 8: Blade Template Engine
Create a Blade view called welcome.blade.php that includes a navigation bar and a section displaying the text "Welcome to Laravel!".

### Ans
#1 We need to create the file  welcome.blade.php in the resources/views directory and add following code
```
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
    <!-- Add your CSS and other head elements as needed -->
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <!-- Add your navigation bar HTML structure and styling -->
    </nav>

    <!-- Content Section -->
    <section>
        <h1>Welcome to Laravel!</h1>
    </section>

    <!-- Add your JavaScript and other body elements as needed -->
</body>
</html>
```

#2 To include this view in the application, we can use the view() function in the routes or controller methods.
```
Route::get('/', function () {
    return view('welcome');
});
```
This route will render the welcome.blade.php view when accessing the root URL of laravel application.

 


Submission Instruction :


Please submit your github repository link.:
https://github.com/mobarakali/Web-Development-with-PHP-Laravel/tree/main/assignments/module15