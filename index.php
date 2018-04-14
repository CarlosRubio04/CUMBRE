<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>

    <?php require_once('blocks/header.php'); ?>
    <?php if(!isset($_REQUEST['content'])){
      require_once('blocks/home.php');
    }elseif($_REQUEST['content']=='dashboard'){
      require_once('blocks/dashboard.php');
    }else{
      require_once('blocks/404.php');
    } 
    ?>
    <?php require_once('blocks/footer.php'); ?>

  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
