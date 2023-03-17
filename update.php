<?php
include('opration.php');
if(isset($_POST['update']))
   {
    $r = updateData();
    echo "<center><h1>$r</h1></center>";
    
   }
else
{
$id = isset($_GET['id']) ? $_GET['id'] : '';
$conn = connection();
$select= "SELECT * FROM employee WHERE eid='$id'";

$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>
<div>
<center><form method="post">
  <table border="2" class="btn btn-danger" class="table">
    <thead>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </thead>
    <tr>
      <td>Emp name</td>
      <td><input type="text" name="ename"
        placeholder="Enter Emp Name" value="<?php echo $row['name'] ?>" required/>
      </td>
    </tr>
    <tr>
      <td>gender</td>
      <td>
        
      <input type="radio" name="gender" 
         value="<?php echo $row['gender']?>"
        <?php 
          if($row['gender']=='male')
          {
            echo "checked";
          }
        ?>
         >male</input>
      <input type="radio" name="gender" 
         value="<?php echo $row['gender']?>"
         <?php 
          if($row['gender']=='female')
          {
            echo "checked";
          }
        ?>
         >female</input>
      </td>
    </tr>
    <tr>
      <td>Enter Emp salary</td>
      <td><input type="number" name="salary" value="<?php echo $row['salary']?>" required></td>
    </tr>
    <tr>
        <td>Enter Emp Email</td>
        <td><input type="email" name="email" value="<?php echo $row['email']?>" required/></td>
    </tr>
    <tr>
    <td><input type="submit"  value="submit" name='update' class="btn btn-success"></td>
    
    </tr>
    </tbody>
 </table>
</form>
</center>
</div>
<?php
}
?>