<?php


?>
<!---
    <div><h1>My Notepad</h1></div>
    <div>
        <form action="record_view.php">
            <div>
                <label for="title">Title</label>
                    <input type="text">
            </div>
            <br>
            <div>
                <label for="content">Create your content..</label><br>
                <textarea name="" id="contnet_id" cols="30" rows="10">
                   
                </textarea>
            </div>
            <label for="time"></label>
            <input type="button" value="Add Note">
        </form>
    </div>
</body> -->, initial-scale=1.0">
  

       



        <!--
          //it's view type not a data type
          <?php
                 $noteheads = array("id","title","content"); 
                 
                    while( $noteset = mysqli_fetch_assoc($result)){
                      echo("<tr>");
                      for($x=0;$x<count($noteheads);$x++){
                        echo("<td>");
                        echo( $noteset[($noteheads[$x])]) ;
                         echo("</td>");
                      }
                       echo("</tr>");
          
          }
        ?> -->
          
