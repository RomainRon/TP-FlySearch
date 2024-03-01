<?php
// include './config/debug.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-ComparOperateur</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

<body class="vh-100 overflow-hidden">


  <!-- Navbar START -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fs-4" href="#"> <img src="../images/FlightFinder-removebg-preview.png" width="80px" class="px-2" alt="">Flight-Finder</a>
      <!-- Toggle Btn -->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--  SideBar -->
      <div class="sidebar offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <!--  SideBar Header -->

        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!--  SideBar Body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#Link">Link</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#Services">Services</a>
            </li>
          </ul>
          <!--  Login In - Sign Up -->
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <a href="#Login" class="text-white">Login</a>
            <a href="#SignUp" class="ButtonSignUp text-black text-decoration-none px-3 py-1 rounded-4">Sign Up</a>
          </div>

        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar END -->