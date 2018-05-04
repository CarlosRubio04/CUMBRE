<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>
    <?php require_once('views/loader.php'); ?>
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
    }elseif($_REQUEST['content']=='alistamiento-inner'){
      require_once('views/alistamiento-inner.php');
    }elseif($_REQUEST['content']=='dash-alistamiento'){
      require_once('views/dash-alistamiento.php');
    }elseif($_REQUEST['content']=='base'){
      require_once('views/base.php');
    }elseif($_REQUEST['content']=='uno'){
      require_once('views/uno.php');
    }elseif($_REQUEST['content']=='dos'){
      require_once('views/dos.php');
    }elseif($_REQUEST['content']=='base-inner'){
      require_once('views/base-inner.php');
    }elseif($_REQUEST['content']=='formulacion'){
      require_once('views/formulacion.php');
    }elseif($_REQUEST['content']=='agregar-actividad'){
      require_once('views/agregar-actividad.php');
    }elseif($_REQUEST['content']=='cronograma'){
      require_once('views/cronograma.php');
    }elseif($_REQUEST['content']=='cursos'){
      require_once('views/cursos.php');
    }elseif($_REQUEST['content']=='perfil'){
      require_once('views/profile.php');
    }elseif($_REQUEST['content']=='dashboard-admin'){
      require_once('views/dashboard-admin.php');
    }elseif($_REQUEST['content']=='upload-teams'){
      require_once('views/upload-teams.php');
    }else{
      require_once('views/404.php');
    } 
    ?>

  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/velocity.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>
