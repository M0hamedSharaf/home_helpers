<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";

?>

<?php include layout("header.php"); ?>

<?php include layout("navbar.php"); ?>

<?php include layout("aside.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home Helper</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item active"><a href="#">Home Helper websit</a></li>
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid text-center">
      
      <img src="<?=getImage("img/s.jpg") ?>" alt="">
    </div>
  </section>
  <!-- /.content -->

  <?php include layout("footer.php"); ?>