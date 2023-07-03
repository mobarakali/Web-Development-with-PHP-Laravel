# মডিউল ১৮ এর এসাইনমেন্ট
### Task 1:
Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:

> id (primary key, auto-increment)

> name (string)

> created_at (timestamp)

> updated_at (timestamp)

### Answer
Here are the steps on how to create a new migration file to add a `"categories"` table with the specified columns in a Laravel project:

1. Open the terminal and navigate to the root directory of the Laravel project.
2. Run the following command to create a new migration file:
```
php artisan make:migration create_categories_table
```
This will create a new migration file in the `database/migrations` directory. The name of the file will be prefixed with the timestamp of when the migration was created.

3. Open the newly created migration file and edit the `up()` method to add the following code:

```
Schema::create('categories', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});
```
This code will create a new table called categories with the following columns:

> id: The primary key of the table.

> name: A string column that stores the name of the category.

> created_at: A timestamp column that stores the date and time the category was created.

> updated_at: A timestamp column that stores the date and time the category was last updated.

4. Save the migration file and run the following command to migrate the changes to the database:
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

``` 
php artisan make:model Category
```
This command will generate a new model file named Category.php in the app directory.

> Step 2: Define the Model Properties and Relationships
We need to open the generated Category.php model file using a text editor, and define the necessary properties and relationships for the "Category" model. Here's an example:

```
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    
    // Relationships
    // For example, a Category may have many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

```

The above code defines a class called `Category`. This class extends the Model class from the Laravel framework. The Model class provides a number of methods for interacting with databases, such as creating, updating, and retrieving records.

The Category class defines two properties:

fillable: This property is an array of the attributes that can be filled in when creating or updating a category. In this case, the only fillable attribute is the name attribute.
products: This property is a relationship that returns all of the products that are associated with the category. The products relationship is a hasMany relationship, which means that each category can have many products. The inverse of this relationship is the category relationship on the Product model.
The products() method returns a collection of Product objects that are associated with the current Category object. The products() method uses the hasMany() method from the Model class. The hasMany() method takes a single argument, which is the class name of the related model. In this case, the related model is the Product class.

 ### Task 3:
    Write a migration file to add a foreign key constraint to the "posts" table. The foreign key should reference the "categories" table on the "category_id" column.

### Answer

 ### Task 4:
    Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
### Answer

### Task 5:
    Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.
### Answer

### Task 6:
    Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.
### Answer

### Task 7:
    Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.
### Answer

### Task 8:
    Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.

### Answer

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

