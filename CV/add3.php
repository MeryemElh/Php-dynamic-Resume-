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
    //echo $_POST[`ename`];
    $ename=$_POST['ename'];
    $edate=$_POST['edate'];
    $edescription=$_POST['edescription'];
    $sql="INSERT INTO `stages` (Name, Date, Description)
    VALUES ('$ename', '$edate','$edescription')";

    if(mysqli_query($conn,$sql)){
      echo "<script>window.location='index.php';</script>";
    }; 
        
}
?>

   

<form class="container card-4" action="add3.php" method="post">
  <h2 class="text-blue">Ajouter une expériences ou projets</h2>
  <p>      
  <label for="ename" class="text-blue"><b>Intitulé</b></label>
  <input class="input border" name="ename" id="ename=" type="text"></p>
  <p>      
  <label for="edate" class="text-blue"><b>Date</b></label>
  <input class="input border" name="edate" id="edate" type="text"></p>
  <p>      
  <label for="edescription" class="text-blue"><b>Description</b></label>
  <input class="input border" name="edescription" id="edescription" type="text"></p>
  <p>      
  <button class="btn blue" name="addlanguage" id="addlanguage">Enregistrer</button></p>
</form>

  </div>
 
</div>


</body>
</html>