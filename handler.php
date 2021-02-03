 <?php
 $connect=mysqli_connect('localhost','login','password') or die(mysqli_error());
mysqli_select_db('myDB');
if(isset($_POST['enter'])){
    $Email = $_POST["email"]
  $User_name = $_POST["User_name"];
  $Pass = $_POST["Pass"];
  $mysql = mysqli_query($connect,"INSERT INTO contacts VALUES ('','$Email', '$User_name','$Pass')");
  }
 ?>

