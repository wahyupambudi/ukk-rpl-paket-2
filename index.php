<?php

require 'function.php';
require 'fungsiCRUD.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Todo List Wahyu</title>
</head>

<body>
  <header>
    <?php include("header.php") ?>
  </header>
  <!-- navigasi -->
  <?php include "nav.php"; ?>
  <div class="container">
    <div class="row">
      <!-- Modal -->
      <?php include "form-input-todo.php"; ?>
      <!-- todo list  -->
      <div class="col-md-8">
        <!-- todo list belum selesai -->
        <?php include 'all-todo.php'; ?>
      </div>
      <div class="col-md-4">
        <!-- todo list belum selesai -->
        <?php include 'todolist-belum-selesai.php'; ?>
        <!-- todolist selesai -->
        <?php include 'todolist-selesai.php'; ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>