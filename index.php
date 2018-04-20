<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>
    <?php 
    if(isset($_REQUEST['content'])){
      require_once('views/header.php');
    }

    if(!isset($_REQUEST['content'])){
      require_once('views/home.php');
    }elseif($_REQUEST['content']=='dashboard'){
      require_once('views/dashboard.php');
    }elseif($_REQUEST['content']=='alistamiento'){
      require_once('views/alistamiento.php');
    }elseif($_REQUEST['content']=='base'){
      require_once('views/base.php');
    }elseif($_REQUEST['content']=='uno'){
      require_once('views/uno.php');
    }elseif($_REQUEST['content']=='dos'){
      require_once('views/dos.php');
    }else{
      require_once('views/404.php');
    } 
    ?>
    <?php require_once('views/footer.php'); ?>

  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="app.js"></script>
</body>
</html>
