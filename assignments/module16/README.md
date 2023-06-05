# মডিউল ১৬ এর এসাইনমেন্ট
## Laravel Migration Concepts
### Task 1:
Create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.
### Answer: 
 Before create any Laravel Project we neet to make sure we have Composer & PHP installed on the machine. after that we can use the following command to create the mention Laravel Project. 
```
composer create-project laravel/laravel MigrationAssignment 
```

### Task 2:
Within the project, create a new migration file named "create_products_table" that will be responsible for creating a table called "products" in the database. The "products" table should have the following columns:



id: an auto-incrementing integer and primary key.

name: a string column to store the product name.

price: a decimal column to store the product price.

description: a text column to store the product description.

created_at: a timestamp column to store the creation date and time.

updated_at: a timestamp column to store the last update date and time.

### Answer:
#1  we need to run the folloing command
```
php artisan make:migration create_products_table --create=products
```
#2 then in the `database/migrations` folder and open the file ends with `_create_products_table.php`. and add/replace with the following code.
```
 public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->timestamps();
        });
    }
```

### Task 3:

After creating the migration file, run the migration to create the `products` table in the database.

### Answer: 
#1 Update your `.env` file with database credentisls and Run the following command.
```
php artisan migrate
```
Laravel will execute this migration and create the `products` table with the specified columns in the database.
 


### Task 4:
Modify the existing migration file "create_products_table" to add a new column called `quantity` to the "products" table. The `quantity` column should be an integer column and allow null values.

### Answer: 
#1 From the `database/migrations` folder we need to open the file  for edit that ends with `_create_products_table.php`. and add the followig line of code inside the `up()` method
```
$table->integer('quantity')->nullable();
```
So the new code will look like this:
```
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price');
        $table->text('description');
        $table->integer('quantity')->nullable();
        $table->timestamps();
    });
}
```
 and save the file and rurn the command: `php artisan migrate` to add the column.


Task 5:


 


Create a new migration file named "add_category_to_products_table" that will be responsible for adding a new column called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters.


 


Task 6:


 


After creating the new migration file, run the migration to add the "category" column to the "products" table.


 


Task 7:


 


Create a new migration file named "create_orders_table" that will be responsible for creating a table called "orders" in the database. The "orders" table should have the following columns:


 


id: an auto-incrementing integer and primary key.


product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.


quantity: an integer column to store the quantity of products ordered.


created_at: a timestamp column to store the creation date and time.


updated_at: a timestamp column to store the last update date and time.


Task 8:


After creating the migration file for the "orders" table, run the migration to create the "orders" table in the database.