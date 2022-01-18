<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<title>ADD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="light-grey">

<div class="content margin-top">
<div class="row-padding">

<?php

if (isset($_POST['addlanguage'])){
    //echo $_POST[`lname`];
    $lname=$_POST['lname'];
    $llevel=$_POST['llevel'];
    $sql="INSERT INTO `languages` (lgname, lglevel)
    VALUES ('$lname', '$llevel')";

    if(mysqli_query($conn,$sql)){
      echo "<script>window.location='index.php';</script>";
    }; 
        
}
?>

   

<form class="container card-4" action="add2.php" method="post">
  <h2 class="text-blue">Ajouter une langue</h2>
  <p>      
  <label for="sname" class="text-blue"><b>Nom</b></label>
  <input class="input border" name="lname" id="name="sname"" type="text"></p>
  <p>      
  <label for="slevel" class="text-blue"><b>Level</b></label>
  <input class="input border" name="llevel" id="slevel" type="text"></p>
  <p>      
  <button class="btn blue" name="addlanguage" id="addlanguage">Enregistrer</button></p>
</form>

  </div>
</div>


</body>
</html>