<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="scp.css" rel="stylesheet">
  </head>
  <body class="container">

    <?php include 'connection.php'; ?>
 
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
         <img src="image/Bruce logo.png" class="logo" style="max-width: 90px; height: auto;">
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
    
          <ul class="nav navbar-dark bg-dark">
          <!-- run php loop through table and display model field here-->
          <?php foreach($result as $link): ?>
          
          <li class="nav-item active" id='Navbartext'>
              <a href="index.php?link='<?php echo $link['model']; ?>'" class="nav-link text-light"><?php echo $link['model']; ?>
              </a>
           </li>
          
          <?php endforeach; ?>
          <div id='SPCnewmodel'>
          <li class="nav-item active"><a href="forms.php" class="nav-link text-light">Add a new SPC Model</a></li>
          </div>
        </ul>
       </div>
     </div>
      
    </div>
 </nav>
  
   <h1>Welcome to SCP Foundation</h1>
   
   <div>
       <?php
       
            if(isset($_GET['link']))
            {
                $model = trim($_GET['link'], "'");
                
               // run sql command to retrieve record based on GET value
                $record = $connection->query("select * from scp where model='$model'");
                
                
                // turn record into an associative array
                $array = $record->fetch_assoc();
                
                 // variables to hold our update and delete url strings
                $id = $array['id'];
                $update = "update.php?update=" . $id;
                $delete = "connection.php?delete=" . $id;
                
               echo "
                <div class='card card-body shadow mb-3' id='box'>
                    <h2 class='card-title'>{$array['model']}</h2>
                    <h4>{$array['heading']}</h3>
                    <h4>{$array['tagline']}</h3>
                    <div class='card card-body shadow mb-3' id='img'>
                    <p class='text-center'><img src='{$array['image']}'></p>
                    </div>
                    <p class='card-text'>{$array['paragraph']}</p>
                    <p>
                        <a href='{$update}' class='btn btn-warning'>Update Record</a>
                        <a href='{$delete}' class='btn btn-danger'>Delete Record</a>
                    </p>
                </div>
                
                
                ";
            }
            else
            {
                //default view that the user sees when visiting for the first time
                echo "
                <div id='pg'> 
                <p>Click on the links above to see SCP information.</p>
                </div>
                
                <div id='imgMain'>
                <p><img src='image/SCPMain2.png' ></p>
                </div>
               
                
                ";
            }
       
       ?>
   </div>
   
    <div id="footer">
      <p>Created by:Lovepreet Singh</p>
      <p>&copy; Copyright 2023. All Rights Reserved.</p>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
