<?php
include('connection.php');
    if(isset($_GET['update'])){

      include('update.php');
    }

    if(isset($_GET['delete'])){
      include('opration.php');
      $r = deleteData();
      echo "<center><h1>$r</h1></center>";
    }
    if(isset($_GET['insert'])){
       include('empInfo.php');
       if(isset($_POST['submit']))
      {
      $r = addData();
      echo "<center><h1>$r</h1></center>";
      }
    }
     ?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
     <h1 align="center" style="color:red">Employee Details</h1>
    </br>
    <div>
    <form method="post">
    <table border="2" align="center" class="table">
    <thead class="thead-dark">
        
        <th scope="col">Eid</th>
        <th scope="col">Ename</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
        <th scope="col">Salary</th>
        <th scope="col">Update</th>    
        <th scope="col">Delete</th>
    </thead>
    <tbody>
        <?php
          
          $conn = connection();
          $query1=mysqli_query($conn, "select * from employee");
          while($row=mysqli_fetch_array($query1))
          {
           ?>
           <tr class="table-warning">
            <td ><?php echo $row['eid'];?></td>
            <td ><?php echo $row['name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['salary'];?></td>
            <td><button class="btn btn-danger"><a href="?update=update&id=<?php echo
            $row['eid']; ?>" />Update</button></td>
            <td><button class="btn btn-danger"><a href="?delete=delete&id=<?php echo
            $row['eid']; ?>" />Delete</button></td>
          </tr>
        <?php  
           } ?> 
    </tbody>
    </table>
    </form>
    </div>
    <from method="post">
      <table align="center">
      <tr>
          <td><button class="btn btn-success"><a href="?insert=insert"/><b>Insert Data</b></button></td> 
      </tr>
      </table>
    </form>

   </body>
</html> 