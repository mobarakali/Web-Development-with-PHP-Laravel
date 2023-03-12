<!DOCTYPE html>
<html>
  <head>
    <title>User Data</title>
  </head>
  <body>
    <h1>Users Info</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
        <th>Date Added</th>
      </tr>
      <?php
        $fp = fopen("users.csv", "r");
        while (($data = fgetcsv($fp)) !== false) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($data[0]) . "</td>";
          echo "<td>" . htmlspecialchars($data[1]) . "</td>";
          echo "<td><img src='uploads/" . htmlspecialchars($data[2]) . "' width='100'></td>";
          echo "<td>" . htmlspecialchars($data[3]) . "</td>";
          echo "</tr>";
        }
        fclose($fp);
      ?>
    </table>
  </body>
</html>
