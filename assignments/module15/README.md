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


 


Task 5: Controller


Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:


 


index(): Display a list of all products.


create(): Display the form to create a new product.


store(): Store a newly created product.


edit($id): Display the form to edit an existing product.


update($id): Update the specified product.


destroy($id): Delete the specified product.


 


Task 6: Single Action Controller


Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the form submission and send an email to a predefined address with the submitted data.


 


Task 7: Resource Controller


Create a resource controller called PostController that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.


 


Task 8: Blade Template Engine


Create a Blade view called welcome.blade.php that includes a navigation bar and a section displaying the text "Welcome to Laravel!".


 


Submission Instruction :


Please submit your github repository link.