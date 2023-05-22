Question 1:


You have a Laravel application with a form that submits user information using a POST request. Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name.


Ans: Here's an example of how one can retrieve the 'name' input field value from a POST request in a Laravel application and store it in a variable called $name:
<pre>
    use Illuminate\Http\Request;

    public function store(Request $request)
    {
        $name = $request->input('name');
        
    }
</pre>

 


Question 2:


In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent.

Ans: To retrieve the value of the 'User-Agent' header from the current request in a Laravel application and store it in a variable called $userAgent, one can use the following code:

<pre>
    use Illuminate\Http\Request;

    public function retrieveUserAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
    }

</pre>
 


Question 3:

You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null.


Ans : To retrieve the value of the 'page' query parameter from a GET request in Laravel and store it in a variable called $page, one can use the following code:

<pre>
    use Illuminate\Http\Request;

    public function handleRequest(Request $request)
    {
        $page = $request->query('page', null);
    }

</pre>
 


Question 4:


Create a JSON response in Laravel with the following data:

<pre>
{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }
}
</pre>

Ans: To create a JSON response in Laravel with the provided data structure, I can use the following code:

<pre>
    use Illuminate\Http\JsonResponse;

    public function createResponse()
    {
        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];

        return new JsonResponse($data);
    }
</pre>

Question 5:

You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file.

Ans: To handle a file upload named 'avatar' in a Laravel application and store the uploaded file in the 'public/uploads' directory using the original filename, I wrote the following code:

<pre>
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    public function handleFileUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $originalFileName = $file->getClientOriginalName();

            $file->storeAs('uploads', $originalFileName, 'public');

        }
    }
</pre>
 
 By using this code, if a file with the name 'avatar' is uploaded in the request, it will be stored in the 'public/uploads' directory with the original file name.


Question 6:


Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.


Ans: To retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken, we can use the following code:
<pre>
    use Illuminate\Http\Request;

    public function retrieveRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
    }
</pre>

We have to ensure that the cookie we're trying to retrieve is present and has been set correctly in a previous response. Also, we have to remember to handle any additional logic or response generation according to our application's requirements.

 
Question 7:


Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:

<pre>
{
    "success": true,
    "message": "Form submitted successfully."
}
</pre>


Ans: To create a route in Laravel that handles a POST request to the '/submit' URL, retrieves the 'email' input parameter, and returns a JSON response with the provided data, one can use the following code in his routes file (routes/web.php or routes/api.php):

<pre>
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\JsonResponse;

    Route::post('/submit', function (Request $request) {
        $email = $request->input('email');
        
        $responseData = [
            'success' => true,
            'message' => 'Form submitted successfully.'
        ];
        
        return new JsonResponse($responseData);
    });
</pre>


Submission Instruction :


Please submit your github repository link.
