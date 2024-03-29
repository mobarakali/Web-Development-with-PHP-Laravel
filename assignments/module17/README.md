# মডিউল ১৭ এর এসাইনমেন্ট
Assignment: Query Builder in Laravel

    Note: It is asume that the appropriate database configuration is set up in the Laravel application for the code example to work correctly.

## Questions:

## 1.Explain what Laravel's query builder is and how it provides a simple and elegant way to interact with databases.
### Answer: 
Laravel's query builder is an elegant feature of Laravel that allows to interact with the database in a programmatic way. It provides a fluent interface that makes it easy to build complex queries without having to worry about writing raw SQL.

The query builder is a powerful tool that can be used to simplify the development of database-driven applications. It provides a consistent interface for interacting with the database, regardless of the underlying database system we are using.

With the query builder, developers can construct complex SQL queries using simple method calls. The query builder abstracts the underlying database system, allowing you to write database-agnostic code. It supports various database systems such as MySQL, PostgreSQL, SQLite, and SQL Server.

The query builder can be used to perform a variety of database operations, including:

Selecting data from tables
Inserting data into tables
Updating data in tables
Deleting data from tables
Joining tables together
Using aggregates (e.g., COUNT, MAX, MIN)
Applying conditions (e.g., WHERE, ORDER BY, LIMIT)

The Laravel query builder is a powerful tool that can be used to perform a wide variety of database operations. It is a great choice for developers who want a simple and elegant way to interact with their databases.

Here are some of the benefits of using Laravel's query builder:

**Fluent method chaining:** The query builder uses method chaining, which allows developers to build queries in a readable and sequential manner. This approach makes it easy to understand and modify queries, as each method call builds upon the previous one.

Example:
```
$users = DB::table('users')
            ->select('name', 'email')
            ->where('active', true)
            ->orderBy('name', 'asc')
            ->get();
```
**Clear syntax for common operations:** The query builder provides a set of concise methods for common database operations such as selecting, inserting, updating, and deleting records. This eliminates the need to write complex SQL statements manually.
Example:

```
// Selecting records
$users = DB::table('users')->get();

// Inserting a record
DB::table('users')->insert([
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
]);

// Updating records
DB::table('users')
    ->where('id', 1)
    ->update(['name' => 'Jane Doe']);

// Deleting records
DB::table('users')->where('id', 1)->delete();
```
**Parameter binding for security:** The query builder automatically handles parameter binding, ensuring that input values are properly escaped to prevent SQL injection attacks. It replaces placeholders in the query with sanitized values, making the queries more secure.
Example:

```
$name = "John Doe";
$email = "johndoe@example.com";

$users = DB::table('users')
            ->where('name', $name)
            ->where('email', $email)
            ->get();
```
**Database agnosticism:** The query builder abstracts the underlying database system, allowing developers to write database-agnostic queries. It provides a consistent API across different database engines, so you can write queries that work seamlessly on MySQL, PostgreSQL, SQLite, SQL Server, and others without needing to change your code.
Example:
```
$users = DB::table('users')->get();
```
As said before, regardless of the underlying database engine, the query builder syntax remains the same.

## 2.Write the code to retrieve the "`excerpt`" and "`description`" columns from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

### Answer: 
Here's an example code snippet that retrieves the "excerpt" and "description" columns from the "posts" table using Laravel's query builder: 

```
$posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();

foreach ($posts as $post) {
    echo $post->excerpt . ' - ' . $post->description . '<br>';
}

```
The `DB::table('posts')` method in this code is used to specify the "posts" table as the query's target. The `select('excerpt', 'description')` method specifies the columns we want to retrieve.

The `get()` method executes the query and retrieves the results, storing them in the $posts variable. Finally, we loop through the $posts collection and print the values of each post's "excerpt" and "description" columns.



## 3.Describe the purpose of the `distinct()` method in Laravel's query builder. How is it used in conjunction with the `select()` method?
### Answer: 
By using `distinct()` in Laravel's query builder, you can easily retrieve unique records based on specific columns or combinations of columns, allowing you to work with a filtered and condensed result set.

The `distinct()` method in Laravel's query builder is used to return only distinct rows from the database. This can be useful when you want to avoid returning duplicate rows, such as when you are counting the number of unique users who have visited a website.

The `distinct()` method is used in conjunction with the `select()` method to specify the columns that you want to return. For example, the following code will return only the distinct id and name columns from the users table:
```
$users = DB::table('users')
    ->select('id', 'name')
    ->distinct()
    ->get();

```
The distinct() method can also be used with multiple columns to find unique combinations of values.
```
$uniqueCombinations = DB::table('orders')
                    ->select('user_id', 'product_id')
                    ->distinct()
                    ->get();

```

The `distinct()` method can also be used with other query builder methods, such as `where()` and `orderBy()`. For example, the following code will return only the distinct id and name columns from the users table where the active column is equal to 1: 
```
$users = DB::table('users')
    ->select('id', 'name')
    ->where('active', 1)
    ->distinct()
    ->get();

```

## 4.Write the code to retrieve the first record from the "`posts`" table where the "`id`" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the "`description`" column of the $posts variable.

### Answer: 
The following code will retrieve the first record from the "`posts`" table where the "`id`" is 2 using Laravel's query builder:

```
$posts = DB::table('posts')
            ->where('id', 2)
            ->first();
 
if ($posts) {
    echo $posts->description;
} else {
    echo "Post not found!";
}
```
This code will first create a new instance of the `DB class`, which represents Laravel's query builder. Then, it will use the `table` method to select the posts table. Next, it will use the `where` method to specify the condition that it wants to filter the results by, which is id is equal to 2. Finally, it will use the `first` method to execute the query and return the first record that matches the condition.

Next if the $posts variable contains a record. If it does, we access the "`description`" column of that record using ` $posts->description` and print it. If no record is found, we print a message indicating that no post was found.

 ## 5.Write the code to retrieve the "`description`" column from the "`posts`" table where the "id" is 2 using Laravel's query builder. Store the result in the` $posts` variable. Print the $posts variable.
### Answer: 
If you want to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder, you can use the following code:
```
$posts = DB::table('posts')
            ->where('id', 2)
            ->select('description')
            ->first();

if ($posts) {
    echo $posts->description;
} else {
    echo "No post found.";
}

```

In this code, we use the `DB::table('posts')` method to specify the "`posts`" table as the target of the query. The `where('id', 2)` method is used to filter the records and retrieve only the record where the "`id`" column is equal to 2.

The `select('description')` method specifies that we only want to retrieve the "`description`" column.

The `first()` method executes the query and retrieves the first matching record. It returns a single object representing that record or null if no record is found.

We then check if the $posts variable contains a record. If it does, we access the "`description`" column of that record using ` $posts->description` and print it. If no record is found, we print a message indicating that no post was found.

 

## 6.Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?
### Answer: 

The `first()` and `find()` methods in Laravel's query builder are both used to retrieve single records from a database table. However, there are some key differences between the two methods.

The `first()` method will return the first row from the query, even if there are no rows that match the criteria. The `find()` method, on the other hand, will only return a row if there is a row that matches the criteria. If there are no rows that match the criteria, the `find()` method will throw an exception.

The `first()` method is typically used when you only need to retrieve the first row from the query. The `find()` method is typically used when you need to be sure that a row exists before you try to retrieve it.

Here is an example of how to use the `first()` method to retrieve the first row from the posts table:

```
$post = DB::table('posts')->first();
```
This code will first create a query builder instance for the posts table. Then, it will use the` first()` method to return the first row from the query. The result of the `first()` method will be a Post model instance, which contains the data for the first row in the posts table.

Here is an example of how to use the `find()` method to retrieve a row from the posts table where the id is 1:

```
$post = DB::table('posts')->find(1);
```
This code will first create a query builder instance for the posts table. Then, it will use the `find()` method to return the row from the query where the id is 1. The result of the `find()` method will be a Post model instance, which contains the data for the row where the id is 1.
 

## 7.Write the code to retrieve the "`title`" column from the "`posts`" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
### Answer: 

retrieves the "`title`" column from the "`posts`" table using Laravel's query builder, stores the result in the ` $posts` variable, and then loops through the collection to print each "`title`" value.

Here's the code:
```
use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
    ->select('title')
    ->get();

foreach ($posts as $post) {
    echo $post->title;
}

```
This code, correctly imported the DB facade from `Illuminate\Support\Facades\DB` at the beginning. The `select('title')` method specifies that you want to retrieve only the "title" column from the "`posts`" table. The `get()` method executes the query and retrieves all the records matching the conditions. It returns a collection of objects, with each object representing a record from the table. 
Then, it iterate over the ` $posts` collection using a foreach loop and access the "title" column for each record using ` $post->title`, and print it.

This code will output the "`title`" values of the records in the "`posts`" table.

 

## 8.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.

### Answer: 
Here's an example code snippet that inserts a new record into the "posts" table using Laravel's query builder with the specified column values:
```
use Illuminate\Support\Facades\DB;

$data = [
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2,
];

$result = DB::table('posts')->insert($data);

if ($result) {
    echo "Record inserted successfully.";
} else {
    echo "Failed to insert record.";
}

```
In this code, we import the DB facade from `Illuminate\Support\Facades\DB `to use Laravel's query builder.

We define an associative array ` $data` that contains the column names as keys and the desired values for each column.

We then use the `insert($data)` method on the `DB::table('posts')` query builder to insert the data into the "`posts`" table.

The `insert()` method returns a boolean value indicating whether the insert operation was successful or not.

Finally, we check the value of ` $result` and print the appropriate message accordingly.
 


## 9.Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.

### Answer: 

Here's an example code snippet that updates the "`excerpt`" and "`description`" columns of the record with the "`id`" of 2 in the "`posts`" table using Laravel's query builder. The new values for the columns are set to '`Laravel 10`', and the number of affected rows is printed:
 
```
use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 2)
                ->update([
                    'excerpt' => 'Laravel 10',
                    'description' => 'Laravel 10',
                ]);

echo "Number of affected rows: " . $affectedRows;

```
In this code, we import the DB facade from `Illuminate\Support\Facades\DB` to use Laravel's query builder. We use the `update()` method on the `DB::table('posts')` query builder to update the specified columns of the record with the "`id`" of 2.

The `where('id', 2)` method is used to filter the record based on its "`id`" column.

The `update()` method takes an associative array where the keys represent the column names to be updated, and the values represent the new values for those columns.

The `update()` method returns the number of affected rows, which indicates how many records were updated.

Finally, we print the number of affected rows using the $affectedRows variable.

## 10.Write the code to delete the record with the "`id`" of 3 from the "`posts`" table using Laravel's query builder. Print the number of affected rows.

### Answer: 
Here is the code to delete the record with the "`id`" of 3 from the "`posts`" table using Laravel's query builder:
```
use Illuminate\Support\Facades\DB;

DB::table('posts')
    ->where('id', 3)
    ->delete();

$affectedRows = DB::affectedRows();

echo "Number of affected rows: $affectedRows";

```
This code will first use the `where()` method on the posts table to find the record with the "`id`" of 3. Then, it will use the `delete()` method to delete the record. Finally, it will use the `affectedRows()` method to get the number of rows that were affected by the delete operation. The number of affected rows will be printed later.
 

## 11.Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.

### Answer: 
The aggregate methods count(), sum(), avg(), max(), and min() are used to perform calculations on a set of data. They can be used to get the total number of rows, the sum of all values, the average of all values, the maximum value, and the minimum value, respectively.

Here are some examples of how to use these methods:

count() returns the total number of rows in a table. For example, to get the total number of users in the database, you would use the following code:

```
$count = DB::table('users')->count();
```


sum() returns the sum of all values in a column. For example, to get the total amount of money spent by all customers, you would use the following code:

``` 
$total_spent = DB::table('orders')->sum('amount'); 
```


avg() returns the average of all values in a column. For example, to get the average age of all users, you would use the following code:

``` 
$average_age = DB::table('users')->avg('age');
 ```


max() returns the maximum value in a column. For example, to get the highest price of any product, you would use the following code:

```
$highest_price = DB::table('products')->max('price');
```

min() returns the minimum value in a column. For example, to get the lowest price of any product, you would use the following code:

```
$lowest_price = DB::table('products')->min('price');
```

These are just a few examples of how to use the aggregate methods in Laravel's query builder. We can use them to perform a variety of calculations on your data.

 
## 12.Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.

### Answer: 
The whereNot() method is used to exclude rows from a query based on a condition. It is similar to the where() method, but it uses the NOT operator to negate the condition.

Here is an example of how to use the whereNot() method:
```
$users = DB::table('users')
    ->whereNot('name', '=', 'John Doe')
    ->get();

```
This query will select all users from the users table whose name is not "John Doe". 

 The whereNot() method is typically used in conjunction with the `where()` method to further filter the query results. 

 For example, the following query will select all users from the users table whose name is not "John Doe" and whose age is greater than 18:

 ```
 $users = DB::table('users')
    ->whereNot('name', '=', 'John Doe')
    ->where('age', '>', 18)
    ->get();
```

## 13.Explain the difference between the `exists()` and `doesntExist()` methods in Laravel's query builder. How are they used to check the existence of records?
### Answer: 

The `exists()` and `doesntExist()` methods in Laravel's query builder are used to check whether or not a record exists in the database. The `exists()` method returns true if the record exists, and false if it does not. The `doesntExist()` method returns the opposite.

Here is an example of how to use the `exists()` method:
```
$exists = DB::table('users')
    ->where('name', '=', 'John Doe')
    ->exists();

```
This code will check if a user exists in the users table whose name is John Doe. If the user exists, the ` $exists` variable will be set to true. If the user does not exist, the ` $exists` variable will be set to false.

Here is an example of how to use the `doesntExist()` method:
```
$doesntExist = DB::table('users')
    ->where('name', '=', 'John Doe')
    ->doesntExist();

```
This code will check if a user does not exist in the users table whose name is John Doe. If the user does not exist, the $doesntExist variable will be set to true. If the user exists, the $doesntExist variable will be set to false.

The `exists()` and `doesntExist()` methods are a convenient way to check whether or not a record exists in the database without having to actually retrieve the record. This can be useful for performance reasons, as it can prevent unnecessary queries from being executed.

Here are some additional things to note about the `exists()` and `doesntExist()` methods:

1. The `exists()` and `doesntExist()` methods can be used with any of the other methods in Laravel's query builder, such as select(), orderBy(), and limit(). 
2. The `exists()` and `doesntExist()` methods can be used with Eloquent models as well.
3. The `exists()` and `doesntExist()` methods can be used to check the existence of records in a result set that is already been retrieved from the database.

## 14.Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

### Answer: 

 Here's an example code snippet that retrieves records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. The result is stored in the $posts variable, and then it is printed: 


```
use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();

foreach ($posts as $post) {
    echo $post->title . ' - ' . $post->min_to_read . ' min to read' . PHP_EOL;
}

```

In this code, we import the DB facade from `Illuminate\Support\Facades\DB` to use Laravel's query builder.

We use the `whereBetween('min_to_read', [1, 5])` method to specify the condition that we want to retrieve records where the "`min_to_read`" column value is between 1 and 5, inclusive.

The `get()` method executes the query and retrieves the matching records as a collection.

We then iterate over the $posts collection using a foreach loop and print the "`title`" and "`min_to_read`" values for each post.


## 15.Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.

### Answer: 
 Here is the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder:
 ```
 use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 3)
                ->increment('min_to_read');

echo "Number of affected rows: " . $affectedRows;

```
This code will first use the `where()` method to select the record with the id of 3 from the posts table. Then, it will use the `increment()` method to increment the value of the `min_to_read` column by 1. Finally, it will use the `affectedRows()` method to get the number of rows that were affected by the query. The number of affected rows will then be printed.

<!-- Submission Instruction :

Make sure to write your answers and code snippets in a pdf file and submit your github repository link. -->