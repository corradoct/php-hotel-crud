<?php

// Includo i file di base dell'URL e del database
include __DIR__ . '/../env.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean hotel</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $basePath . '/dist/app.css'; ?>">
  </head>
  <body>

    <!-- General wrapper -->
    <div class="wrapper">

      <!-- Header -->
      <header>

        <!-- Logo -->
        <div class="logo">
          <h1>Hotel Boolean</h1>
        </div>
        <!-- End logo -->

        <!-- Homepage -->
        <div class="homepage">
          <a href="<?php echo $basePath ?>">--> Lista completa delle stanze <--</a>
        </div>
        <!-- End homepage -->

      </header>
      <!-- End header -->
