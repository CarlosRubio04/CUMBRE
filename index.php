<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>

    <?php require_once('views/header.php'); ?>
    <?php if(!isset($_REQUEST['content'])){
      require_once('views/home.php');
    }elseif($_REQUEST['content']=='dashboard'){
      require_once('views/dashboard.php');
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
