<?php
function addData()
    {
    $ename = isset($_POST['ename']) ? $_POST['ename'] : "New Emp";
    $salary =isset($_POST['salary']) ? $_POST['salary'] : 15000;
    $gender =isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
        
    $conn = connection();
    $sql ="insert into employee(name,gender,email,salary)
           values('$ename' , '$gender', '$email','$salary') ";
  
      if ($conn->query($sql) === TRUE) {
          return "Record added successfully";
        } else {
          return "Error: " . $sql . "<br>" . $conn->error;
        }
      $conn->close();
    }

function updateData()
{

$id = isset($_GET['id']) ? $_GET['id'] : '';
if(isset($_POST['update']) && $id!='')
{
  $ename =isset($_POST['ename']) ? $_POST['ename'] : "New Emp";
  $salary =isset($_POST['salary']) ? $_POST['salary'] : 15000;
  $gender =isset($_POST['gender']) ? $_POST['gender'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
      
  $conn = connection();
  $sql = "UPDATE employee SET name='$ename',gender='$gender',salary='$salary',email='$email' WHERE eid='$id'";

  if ($conn->query($sql) === TRUE) {
   return  'Record Updated successfully';
   } else {
   return "Error updating record: ".$conn->error;
  }

   $conn->close();
}
}
function deleteData()
{
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $conn = connection();
  $sql = "DELETE FROM employee WHERE eid='$id' ";

  if ($conn->query($sql) === TRUE) {
     
     return "Record deleted successfully";
   } else {
    return "Error deleting record: " .$conn->error;
  }

   $conn->close();
}
?>