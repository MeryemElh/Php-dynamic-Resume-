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

if (isset($_POST['addformation'])){
    //echo $_POST[`fname`];
    $fname=$_POST['fname'];
    $fdate=$_POST['fdate'];
    $flieu=$_POST['flieu'];
    $sql="INSERT INTO `formation` (Name, Date, Lieu)
    VALUES ('$fname', '$fdate','$flieu')";

    if(mysqli_query($conn,$sql)){
      echo "<script>window.location='index.php';</script>";
    }; 
        
}
?>

   

<form class="container card-4" action="add4.php" method="post">
  <h2 class="text-blue">Ajouter une Formation</h2>
  <p>      
  <label for="fname" class="text-blue"><b>Intitulé</b></label>
  <input class="input border" name="fname" id="fname=" type="text"></p>
  <p>      
  <label for="fdate" class="text-blue"><b>Date</b></label>
  <input class="input border" name="fdate" id="fdate" type="text"></p>
  <p>      
  <label for="flieu" class="text-blue"><b>Lieu</b></label>
  <input class="input border" name="flieu" id="flieu" type="text"></p>
  <p>      
  <button class="btn blue" name="addformation" id="addformation">Enregistrer</button></p>
</form>

  </div>
 
</div>


</body>
</html>