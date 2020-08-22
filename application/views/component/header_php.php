 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/simple-sidebar.css') ?>" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="icon" href="<?php echo base_url('assets/images/logos/cyb.png') ?>">

    <title><?= $title;?></title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-primary justify-content-between">
      <a class="navbar-brand text-light" href="<?= base_url('Home')?>">
        <img src="<?php echo base_url('assets/images/logos/cyb.png') ?>" width="38" height="38" class="d-inline-block align-top" alt="" loading="lazy">CYB LEARNIG
    </a>
      <div class="float-right text-light">Belajarlah Di Setiap Waktu Luangmu !</div>
    </nav>

 <div class="d-flex" id="wrapper">


 <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a  class="text-decoration-none text-secondary" href="<?= base_url('PHP');?>">PHP</a></div>
    <div class="list-group">
        <?php $num =1; ?>
        <?php foreach ($data->result_array() as $d) :?>
          
          <a href="<?= base_url('php/menu/')?><?=  $d['id_menu'];?>" class="list-group-item list-group-item-action ">
          <?= "#".$num;echo" ";echo $d['sub_menu']; ?> </a>
          <?php $num++; ?>  
        <?php endforeach; ?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
        <button class="btn btn-primary" id="menu-toggle">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.146 7.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 11l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M2 11a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 11zm3.854-9.354a.5.5 0 0 1 0 .708L3.207 5l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M2.5 5a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0 ml-sm-0 col-sm-5">
                  <input class="form-control col-8 " type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-secondary my-2  my-sm-0 ml-2" type="submit">Search</button>
         </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">PHP <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
           
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                <path d="M13.784 14c-.497-1.27-1.988-3-5.784-3s-5.287 1.73-5.784 3h11.568z"/>
                <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              CYBER PERSON
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute;">
                <?php $l = 1;?>
                <?php if ($l <= 1): ?>
                <a class="dropdown-item" href="<?= base_url('auth/login');?>">Login</a>
                <?php else :?>
                  <a class="dropdown-item" href="#">Logout</a>
                <?php endif ?>
                <a class="dropdown-item" href="#">Privacy Policy</a>
              </div>
          </ul>
        </div>
      </nav>