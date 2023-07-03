# মডিউল ১৮ এর এসাইনমেন্ট
### Task 1:
Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:

> id (primary key, auto-increment)

> name (string)

> created_at (timestamp)

> updated_at (timestamp)

### Answer
Here are the steps on how to create a new migration file to add a `"categories"` table with the specified columns in a Laravel project:

1. Open the terminal and navigate to the root directory of the Laravel project. Run the following command to create a new migration file:
```
php artisan make:migration create_categories_table
```
This will create a new migration file with the name `create_categories_table` in the `database/migrations` directory. The name of the file will be prefixed with the timestamp of when the migration was created.

2. Open the newly created migration file and edit the `up()` method to add the following code:

```php
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamp('created_at')->useCurrent();
    $table->timestamp('updated_at')->useCurrent();
});
```
In the code above, the up method is used to define the table structure according to our needs. This code will create a new table called categories with the following columns after **Step 3** is done:

> id: The primary key of the table.

> name: A string column that stores the name of the category.

> created_at: A timestamp column that stores the date and time the category was created.

> updated_at: A timestamp column that stores the date and time the category was last updated.

3. Save the migration file and run the following command to migrate the changes to the database:
```
php artisan migrate
```
This will create the categories table in the database.

After following these steps, we will have a new migration file that will add a categories table to thre Laravel project, complete with the specified columns.


### Task 2:
Create a new model named "Category" associated with the "categories" table. Define the necessary properties and relationships.
### Answer
To create a new model named `"Category"` associated with the `"categories"` table in Laravel, we can follow these steps:

> Step 1: Generate the Model
In the terminal or command prompt, we need to navigate to the Laravel project's root directory and run the following command:

```bash
php artisan make:model Category
```
This command will generate a new model file named Category.php in the app directory.

> Step 2: Define the Model Properties and Relationships
We need to open the edit the `Category.php` model file and define the necessary properties and relationships for the `"Category"` model. Here's an example:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    // Assume that one category has many Posts (one-to-many relationship)
    // We can write the relationship like this:

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

```
The above code defines a class called `Category`. This class extends the Model class from the Laravel framework. The Model class provides a number of methods for interacting with databases, such as creating, updating, and retrieving records.

The Category class defines two properties:

**fillable**: This property is an array of the attributes that can be filled in when creating or updating a category. In this case, the only fillable attribute is the name attribute.


**posts**: This property is a relationship that returns all of the posts that are associated with the category. The posts relationship is a hasMany relationship, which means that each category can have many posts. The inverse of this relationship is the category relationship on the Post model. The `posts()` method returns a collection of Post objects that are associated with the current Category object. The `posts()` method uses the `hasMany()` method from the Model class. The `hasMany()` method takes a single argument, which is the class name of the related model. In this case, the related model is the Post class.

 ### Task 3:
Write a migration file to add a foreign key constraint to the "posts" table. The foreign key should reference the "categories" table on the "category_id" column.

### Answer
To create a migration file using the command line in Laravel, we can use the `make:migration` Artisan command. Here's an example command to generate the migration file we need:

```bash
php artisan make:migration add_foreign_key_to_posts_table --table=posts
```
now we need to open the lavael project and go to the `database/migrations` directory. There we will find a new migration file named ends with `add_foreign_key_to_posts_table.php`. After editing the file, it will look like this:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}

```
The above code defines a class called `AddForeignKeyToPostsTable`. This class extends the Migration class from the Laravel framework. The Migration class provides a number of methods for interacting with databases, such as creating, updating, and retrieving records.

now we need to run the following command to migrate the changes to the database:
```bash
php artisan migrate
```
This will create the foreign key constraint in the posts table.


 ### Task 4:
Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
### Answer
we can create a relationship between the `"Post"` and `"Category"` models in Laravel by following these steps:
```bash
php artisan make:model Post
```
This command will generate a new model file named `Post.php` in the app directory. Previously we have created the Category model in `Category.php`. Now we need to open the edit the `Post.php` model file and define the necessary properties and relationships for the `"Post"` model. Here's an example:

```php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
```
The above code defines a class called `Post`. This class extends the Model class from the Laravel framework. The Model class provides a number of methods for interacting with databases, such as creating, updating, and retrieving records.

We will also open the `Category.php` model file and define the necessary properties and relationships for the `"Category"` model. Here's an example:

```php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
```
The above code defines a class called `Category`. This class extends the Model class from the Laravel framework. The Model class provides a number of methods for interacting with databases, such as creating, updating, and retrieving records.

The Category class defines a property called `posts`. This property is a relationship that returns all of the posts that are associated with the category. The posts relationship is a hasMany relationship, which means that each category can have many posts. The inverse of this relationship is the category relationship on the Post model.The `posts()` method returns a collection of Post objects that are associated with the current Category object. The `posts()` method uses the `hasMany()` method from the Model class. The `hasMany()` method takes a single argument, which is the class name of the related model. In this case, the related model is the Post class.

The Post class defines a property called `category`. This property is a relationship that returns the category that is associated with the post. The category relationship is a belongsTo relationship, which means that each post belongs to a category. The inverse of this relationship is the posts relationship on the Category model.The `category()` method returns a Category object that is associated with the current Post object. The `category()` method uses the `belongsTo()` method from the Model class. The `belongsTo()` method takes a single argument, which is the class name of the related model. In this case, the related model is the Category class.


### Task 5:
Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.
### Answer

Sure, here is the query using Eloquent ORM to retrieve all posts along with their associated categories:
    
```php
$posts = Post::with('category')->get();
```
This query will return all posts along with their associated categories. The `with()` method is used to eager load the categories to optimize the query. The `with()` method in Eloquent ORM allows us to eager load the relationships of a model. In this case, we are eager loading the category relationship of the Post model. This means that when we fetch the posts, their associated categories will also be fetched. This will optimize the query because we will not have to make a separate query to fetch the categories.

The `get()` method in Eloquent ORM will return a collection of posts. Each post in the collection will have its associated category.

To run this query, you can use the following code:
    
```php
$posts = Post::with('category')->get();

foreach ($posts as $post) {
    echo $post->title . ' belongs to category ' . $post->category->name;
}   
```
This code will print out the title of each post and the name of the category that the post belongs to.
### Task 6:
Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.
### Answer
To implement the method in the `"Post"` model to get the total number of posts belonging to a specific category, we can follow these steps:

> Step 1: Open the `Post.php` model file and add the following code:

```php 
public function countPosts($categoryId)
{
    return $this->where('category_id', $categoryId)->count();
}
``` 
The above code defines a method called `countPosts()` that accepts a category ID as a parameter. The method uses the `where()` method from the Model class to filter the posts by the category ID. The `where()` method takes two arguments: the column name and the value to filter by. In this case, we are filtering the posts by the category ID. The `count()` method is used to get the total number of posts that match the filter.

> Step 2: Open the `routes/web.php` file and add the following code:

```php 
Route::get('/posts/{id}/count', function ($id) {
    $post = new Post();
    return $post->countPosts($id);
});
```
The above code defines a route that accepts a category ID as a parameter. The route uses the `countPosts()` method from the Post model to get the total number of posts belonging to the category. The route returns the count as a response.

> Step 3: Open the browser and navigate to the following URL: `http://localhost:8000/posts/1/count`. This will return the total number of posts belonging to the category with ID 1.

> Step 4: Open the browser and navigate to the following URL: `http://localhost:8000/posts/2/count`. This will return the total number of posts belonging to the category with ID 2.


### Task 7:
Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.
### Answer

To create a new route in the `web.php` file and implement the corresponding controller method to delete a post by its ID using soft delete, follow these steps:

Step 1: Define the route in `web.php`
Open your `web.php` file located in the `routes` directory and add the following route definition:

```php

use App\Http\Controllers\PostController;

Route::delete('/posts/{id}/delete', [PostController::class, 'softDelete'])->name('posts.softDelete');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

```
This route definition specifies that when a DELETE request is made to the URL `/posts/{id}/delete`, it should be handled by the `softDelete` method of the `PostController` class. The `name('posts.softDelete')` method is used to assign a name to the route for generating URLs. The `name()` method takes a single argument, which is the name of the route. In this case, the name of the route is `posts.softDelete`. 

The second route definition specifies that when a GET request is made to the URL `/posts`, it should be handled by the `index` method of the `PostController` class. The `name('posts.index')` method is used to assign a name to the route for generating URLs. The `name()` method takes a single argument, which is the name of the route. In this case, the name of the route is `posts.index`.

Step 2: To create the `PostController.php` file. Run the following command to generate the `PostController`:

```bash
php artisan make:controller PostController
```

This command will create a new `PostController.php` file in the `app/Http/Controllers` directory of your Laravel project.


Step 3: Open the `PostController.php` file and Implement the `delete` method in the controller. Your `PostController.php` file should look like this:


```php
<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }


    public function softDelete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post soft deleted successfully.');
    }
}
```

In the `delete` method, we first retrieve the post with the given ID using `findOrFail()` to ensure that the post exists. Then, we call the `delete()` method on the post model to soft delete the record.

Finally, we redirect the user to a specified route (e.g., `posts.index`) and include a success flash message using the `with()` method.  We have also created `index()` methode to show the posts in the `posts.blade.php` file. Which will be discussed in the next step.

Step 4: Now we need to create a Blade template file named `posts.blade.php`, so we can save it in the `resources/views` directory of Laravel project.

Here's the content of the` posts.blade.php` file:

```php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    <h1>Posts</h1>

    @foreach($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>

            <form action="{{ route('posts.softDelete', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    
</body>
</html>
```

In this example, we assume that you have a variable `$posts` containing the collection of posts that you want to display. The `@foreach` loop iterates over each post and generates the HTML code for the post's title, content, and the delete form.

The form's action attribute is set to the `posts.softDelete` route, with the post's ID passed as a parameter. This will generate the URL for the soft delete route for the specific post.

Inside the form, we include the `@csrf` directive to generate a CSRF token, which is required for security purposes. The `@method('DELETE')` directive is used to override the form's method and send a DELETE request to the server when the form is submitted.

Finally, the submit button allows the user to trigger the deletion of the post when clicked.

### Task 8:
Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.

### Answer
To implement a method in the `"Post"` model to retrieve all soft deleted posts, we can use Laravel's built-in functionality for soft deleting and querying soft deleted records. Here's an example of how you can achieve this:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function getSoftDeletedPosts()
    {
        return $this->onlyTrashed()->get();
    }
}
```

 #### Task 9:
Write a Blade template to display all posts and their associated categories. Use a loop to iterate over the posts and display their details.
### Answer

### Task 10:
Create a new route in the web.php file to handle the following URL pattern: "/categories/{id}/posts". Implement the corresponding controller method to retrieve all posts belonging to a specific category. The category ID should be passed as a parameter to the method.
### Answer

### Task 11:
Implement a method in the "Category" model to get the latest post associated with the category. The method should return the post object.
### Answer

### Task 12:
Write a Blade template to display the latest post for each category. Use a loop to iterate over the categories and display the post details.
### Answer


> Submission Instruction :

    Please submit your github repository link.
    https://github.com/mobarakali/Web-Development-with-PHP-Laravel/tree/main/assignments/module18

