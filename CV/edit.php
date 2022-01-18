<?php include 'connect.php';?>
    <?php
    if(isset($_GET[`edit`])){
        $edit_id=$_GET[`edit`];
    }
    ?>

<!DOCTYPE html>
<html>
<title>Edit</title>
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
if (isset($_POST['modif'])){ 
    $legende=mysqli_real_escape_string($conn,$_POST['legende']);
    $sql="UPDATE `about` SET `Legende` = '$legende' WHERE `about`.`id`=1";
    if(mysqli_query($conn,$sql)){
      echo "<script>window.location='index.php';</script>";
    }        
}
    //$sql="SELECT * FROM about WHERE id=1";
   // $result=mysqli_query($conn,$sql);
    //$row=mysqli_fetch_row($result);
    //print_r($row);
?>
  

<form class="container card-4" action="edit.php" method="post">
  <h2 class="text-blue">Modifier la légende</h2>
  <p>      
  <label for="legende" class="text-blue"><b>Nouvelle légende</b></label>
  <input class="input border" name="legende" id="legende" type="text"></p>
  <p>      
  <button class="btn blue" name="modif" id="modif">Enregistrer</button></p>
</form>



</div>
</div>


</body>
</html>