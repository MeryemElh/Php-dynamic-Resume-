<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<title>CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="light-grey">

<div class="content margin-top" style="max-width:1400px;">


  <div class="row-padding">
  
  
    <div class="third">
    
      <div class="white text-grey card-4">
        <div class="display-container">
          <img src="img/profile2.jpg" style="width:100%;text-align: center;" alt="Avatar">
          <div class="display-bottomleft container text-white">
            <h2>EL Halfa Meryem</h2>
          </div>
        </div>
        <div class="container">
          <p><i class="fa fa-briefcase fa-fw margin-right large text-teal"></i>Developpeuse Front-end/Back-end</p>
          <p><i class="fa fa-home fa-fw margin-right large text-teal"></i>Casablanca, MA</p>
          <p><i class="fa fa-envelope fa-fw margin-right large text-teal"></i>meryem1999elh@gmail.com</p>
          <p><i class="fa fa-phone fa-fw margin-right large text-teal"></i>+212693152280</p>
          <p><img src="img/Logo-dark" style="width:8%;" alt="logo" ></img>  <a href="https://meryemelhalfa.netlify.app/" target="_blank"> https://meryemelhalfa.netlify.app/</a></p>
          <hr>

          <p class="large"><b><i class="fa fa-globe fa-fw margin-right text-teal"></i>Langues</b><a href="add2.php"><i class="fa fa-plus fa-fw right text-teal"></i></a></p>
          <!-- Affichage dinamique des langues -->
          <?php 
            $sql='SELECT * FROM `languages`';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
          <p><?php echo $row["lgname"] ?><a href="index.php?delid=<?php echo $row["id"] ?>"><i class="fa fa-remove fa-fw right text-teal"></i></a></p>
          <div class="light-grey round-xlarge small">
          <div class="container center round-xlarge teal" style="width:<?php echo $row["lglevel"] ;?>%"><?php echo $row["lglevel"] ;?>%</div>
          </div>
           <?php }
            // suppression de langue 
            if(isset($_GET['delid'])){
            $del_id=$_GET['delid'];
            $sql="DELETE FROM `languages` WHERE id=$del_id;";
            print_r($sql);
             if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php';</script>";
            }
}
?>

          <br>
          <p class="large text-theme"><b><i class="fa fa-asterisk fa-fw margin-right text-teal"></i>Technologies et langages</b><a href="add.php"><i class="fa fa-plus fa-fw right text-teal"></i></a></p>
        <!-- Affichage dinamique des langages et technos -->
        <?php 
            $sql='SELECT * FROM `skills` ';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
          <p><?php echo $row["skillname"] ?><a href="index.php?del=<?php echo $row["id"] ?>"><i class="fa fa-remove fa-fw right text-teal"></i></a></p>
          <div class="light-grey round-xlarge">
          <div class="round-xlarge teal" style="height:24px;width:<?php echo $row["skilllevel"] ;?>%"></div>
          </div>
        <?php }

        // suppression de qualité 
        if(isset($_GET['del'])){
            $del_id=$_GET['del'];
            $sql="DELETE FROM `skills` WHERE id=$del_id;";
            print_r($_GET);
             if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php';</script>";
            }
        }
?>
          <br>
        </div>
      </div><br>
    </div>

    <div class="twothird">
    <!-- Affichage dinamique de la partie a propos de moi -->
    <?php 
            $sql='SELECT * FROM `about` ';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="container card white margin-bottom">
        <h2 class="text-grey padding-16"><i class="fa fa-certificate fa-fw margin-right xxlarge text-teal"></i>A propos de moi<a href="edit.php?edit=<?php echo $row["id"] ?>"><i class="fa fa-edit fa-fw right text-teal"></i></a></h2>
        <p><?php echo $row["Legende"] ?></p>
      </div>
        <?php }
?>
    
      <div class="container card white margin-bottom">
          <!-- Affichage dinamique des expériences et projets -->
        <h2 class="text-grey padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-teal"></i>Expériences et projets<a href="add3.php"><i class="fa fa-plus fa-fw right text-teal"></i></a></h2>
         <?php 
            $sql='SELECT * FROM `stages` ';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="container">
          <h5 class="opacity"><b><?php echo $row["Name"] ?></b><a href="index.php?dell=<?php echo $row["id"] ?>"><i class="fa fa-remove fa-fw right text-teal"></i></a></h5>
          <h6 class="text-teal"><i class="fa fa-calendar fa-fw margin-right"></i><?php echo $row["Date"] ?></h6>
          <p><?php echo $row["Description"] ?></p>
          <hr>
        </div>
        <?php }
        // suppression du stage 
        if(isset($_GET['dell'])){
            $dell_id=$_GET['dell'];
            $sql="DELETE FROM `stages` WHERE id=$dell_id;";
            print_r($_GET);
             if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php';</script>";
            }
        }
    ?>
      </div>

        <div class="container card white margin-bottom">
          <!-- Affichage dinamique de la formation  -->
        <h2 class="text-grey padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-teal"></i>Formation<a href="add4.php"><i class="fa fa-plus fa-fw right text-teal"></i></a></h2>
         <?php 
            $sql='SELECT * FROM `formation` ';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="container">
          <h5 class="opacity"><b><?php echo $row["Name"] ?></b><a href="index.php?delet=<?php echo $row["id"] ?>"><i class="fa fa-remove fa-fw right text-teal"></i></a></h5>
          <h6 class="text-teal"><i class="fa fa-calendar fa-fw margin-right"></i><?php echo $row["Date"] ?></h6>
          <p><?php echo $row["Lieu"] ?></p>
          <hr>
        </div>
        <?php }
        // suppression de la formation
        if(isset($_GET['delet'])){
            $delet_id=$_GET['delet'];
            $sql="DELETE FROM `formation` WHERE id=$delet_id;";
            print_r($_GET);
             if(mysqli_query($conn,$sql)){
            echo "<script>window.location='index.php';</script>";
            }
        }
    ?>
      </div>

  
    </div>
    

  </div>
  
</div>

<footer class="container teal center margin-top">
  <p>Suivez moi</p>
  <a href="https://web.facebook.com/meryem.elhalfa/" target="_blank"><i class="fa fa-facebook-official hover-opacity"></i></a>
  <a href="https://www.instagram.com/mery_elh/" target="_blank"><i class="fa fa-instagram hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/elhalfa-meryem/" target="_blank"><i class="fa fa-linkedin hover-opacity"></i></a>
  <p>2020 Developpé par <a href="https://meryemelhalfa.netlify.app/" target="_blank">EL Halfa Meryem</a></p>
</footer>

</body>
</html>