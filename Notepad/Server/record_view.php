<?php  
require_once("db.php");
$sql = "SELECT Topic,content,addedDate FROM notes;";
$result = mysqli_query($db_conn,$sql);

     $notez =array();
      while($noteset = mysqli_fetch_assoc($result)){
       array_push($notez,$noteset);
      }
      $json = JSON_encode($notez);
      echo $json;
     ?> 






<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Records already sticked</title>
</head>
<body>
<table border="1px"> 
                 <thead>
                    <tr>
                       <td>Id</td>
                       <td>Title</td>
                       <td>Content</td>
                     </tr>
                  </thead>
                
                  <tbody>
         
      
                  </tbody>
            </table>
</body>
</html>
     -->