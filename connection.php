<?php
// data base credentials 
  $user = "a30069034_scp";
  $db = "a30069034_SCP";
  $pw ="Toiohomai1234";
  
   // database connection 
   $connection = new mysqli('localhost',$user,$pw,$db);
   
   // variable that retuen all records in database 
   $result = $connection->query("select * from scp");
   
   
// check if form data has been send via post
    if(isset($_POST['submit']))
    {
        // create variables from our form post data
        $heading = $_POST['heading'];
        $model = $_POST['model'];
        $tagline = $_POST['tagline'];
        $paragraph = $_POST['paragraph'];
        $image = $_POST['image'];
        
        // create a sql insert command
        $insert = "insert into scp(heading, model, tagline, paragraph, image) 
        values('$heading','$model', '$tagline', '$paragraph', '$image')";
        
        if($connection->query($insert) === TRUE)
        {
            echo "
                <h1>Record added succesfully</h1>
                <p><a href='index.php'>Return to index page</a></p>
            ";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error}</p>
                <p><a href='index.php'>Return to index page</a></p>
            
            ";
        }
    } // end isset post
    
    //UPDATE FORM if else here
     if(isset($_POST['update']))
    {
        //creat variables from post data to update form
        $id = $_POST['id'];
        $model = $_POST['model'];
        $heading = $_POST['heading'];
        $tagline = $_POST['tagline'];
        $paragraph = $_POST['paragraph'];
        $image = $_POST['image'];
        
        //next here creat SQL QUERY line ch e copy karna a
        $update = "update scp set model='$model', heading='$heading', tagline='$tagline', paragraph='$paragraph', image='$image'
            where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "<h1>Record Updated scussfully</h1>";
            echo "<p><a href='index.php' class='btn btn-info'>Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not updated</h1>";
            echo "<p>{$connection->error()}</p>";
            echo "<p><a href='index.php' class='btn btn-secondary'>Home</a></p>";
        }
    }
    //END UPDATE post
    
    //DELETE RECORD suru here
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        // delete sql command
        $del = "delete from scp where id=$id";
        
        if($connection->query($del) === TRUE)
         {
          echo"
              <h1>Record Deleted</h1>
              <p><a href='index.php'>Back to index page</a></p>
          ";
        }
        else
           {
             echo"
               <h1>Error deleting record</h1>
                <p>{$connection->error}</p>
                <p><a href='index.php'>Back to index page</a></p>
             ";
           }
    }

?>
