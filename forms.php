<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kentorth Trucks Practice TWO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="container">
    <!--form de lai-->
   <h1> Enter a new SCP Subject into the Dtabase</h1>
   <p><a href="index.php" class="btn btn-primary">Back to index page</a></p>
    
    <form method="post" action="connection.php" class="form-group">
       
        <!--model-->
       <label>Enter SPC Subject Model</label>
       <br><br>
       <input type="text" name="model" placeholder="Model" class="form-control" >
       <br><br>
       <!--heading-->
         <label>Enter SPC Subject Heading</label>
       <br><br>
       <input type="text" name="heading" placeholder="headind" class="form-control" >
       
      <!--Enter another TAGLINE  here-->
      <br><br>
       <label>Enter Taglinel</label>
       <br><br>
       <input type="text" name="tagline" placeholder="Tagline" class="form-control" >
       <!--Enter MODEL INFORMATION  here-->
       <br><br>
       <label>Enter SCP foundation Model Information</label>
       <br><br>
       <textarea name="paragraph" class="form-control">Model information here....</textarea>
       <!--Enter Image  here-->
       <br><br>
       <label>Enter new SCP Image Location</label>
       <br><br>
       <input type="text" name="image" placeholder="eg.images/trucks.jpg" class="form-control">
       <br><br>
       <input type="submit" name="submit" value="submit record" class="btn btn-dark">
   </form>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
