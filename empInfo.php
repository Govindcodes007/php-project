<?php
  include('opration.php');   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Website</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<center><form method="post">
  <table border="2" class="table-success">
    <tr>
      <td>Emp name</td>
      <td><input type="text" name="ename"
        placeholder="Enter Emp Name" required /></td>
    </tr>
    <tr>
      <td>gender</td>
      <td>
      <input type="radio" name="gender" 
        value="male" required>male</input>
      <input type="radio" name="gender" 
        value="female" required>female</input>
      </td>
    </tr>
    <tr>
      <td>Enter Emp salary</td>
      <td><input type="number" name="salary" required></td>
    </tr>
    <tr>
        <td>Enter Emp Email</td>
        <td><input type="email" name="email" required/></td>
    </tr>
    <tr>
    <td><input type="submit"  value="submit" name="submit" class="btn btn-primary"></td> 
    
    </tr>
 </table>
</form>
</center>
</body>
</html>
