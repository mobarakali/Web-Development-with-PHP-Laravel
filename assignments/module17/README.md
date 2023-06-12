# মডিউল ১৭ এর এসাইনমেন্ট
Assignment: Query Builder in Laravel

## Instructions:
Read the given code snippets and questions carefully.

Write the code that best answers each question.

Make sure to provide clear and concise answers.

Submit your completed assignment within the given time frame.

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

 


#### 6.Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?
### Answer: 


 

### 7.Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.
### Answer: 


 

### 8.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.

### Answer: 

 


### 9.Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.


### Answer: 
 


### 10.Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.

### Answer: 

 


### 11.Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.

### Answer: 

 


### 12.Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.

### Answer: 

 


### 13.Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?
### Answer: 


 


### 14.Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

### Answer: 

 


### 15.Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.

### Answer: 

<!-- Submission Instruction :

Make sure to write your answers and code snippets in a pdf file and submit your github repository link. -->