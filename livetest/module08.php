<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Table Example</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Age</th>
      </tr>
      <tr>
        <td>John</td>
        <td>25</td>
      </tr>
      <tr>
        <td>Sarah</td>
        <td>30</td>
      </tr>
      <tr>
        <td>Mike</td>
        <td>28</td>
      </tr>
    </table>
    <h2>Add a New Entry</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br>
      <label for="age">Age:</label>
      <input type="text" id="age" name="age"><br>
      <input type="button" value="Submit" onclick="addRow()">
    </form>
    
    <script>
      function addRow() {
        var name = document.getElementById("name").value;
        var age = document.getElementById("age").value;
        
        var table = document.getElementsByTagName("table")[0];
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = name;
        cell2.innerHTML = age;
      }
    </script>

</body>
</html>