<?php  

// require_once("db.php");
require_once __DIR__.'/db.php';


   if(!(isset($_POST['content'])) && (isset($_POST['title']))) {
    die("error");
   }
   
$title =$_POST['title'];
$content = $_POST['content'];


$sql = "INSERT INTO notes(Topic,content)VALUES('".$title."','".$content."')";
// $result = mysqli_query($db_conn,$sql);

if(mysqli_query($db_conn,$sql)){
   echo "Records inseerted successfully .";

}else{
   echo "Error: ".mysqli_error($db_conn);
}

  
     ?> 