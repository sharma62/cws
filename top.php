<?php  include 'config.php';?> 
 <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/43aded160e.js" crossorigin="anonymous"></script>


    <!-- offline bootstrap CDN link & Js CDN -->
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/js/bootstrap.bundle.js">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/cws-style.css">
    <link rel="stylesheet" href="assets/css/cws-style-2.css">
 <style>
 
 #mySidenav a {
    position: fixed;
    left: -65px;
    transition: 0.3s;
    z-index: 1;
    padding: 15px;
    width: 80px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0px;
}

#about {
    top: 20px;
    background-color: #4CAF50;
}

#blog {
    top: 80px;
    background-color: #2196F3;
}

#projects {
    top: 140px;
    background-color: #f44336;
}

#contact {
    top: 200px;
    background-color: #555;
}

 
 
 </style>


    <title>index</title>
</head>

<body>
    <!-- auto type header -->
    <header class="container">
        <h1 class="rotation">
            <div class="title"> Welcome to <span>&lt</span><b
                    style="color:rgb(151, 89, 209)">/</b>CodeWithSuraj<span>&gt</span></div>
            <h2>Learn
                <span class="wrap" data-period="2000"
                    data-rotate='[ "Web Development ", "App Development","Digital Marketing", " & Much more" ]'></span>
            </h2>
            <hr>
        </h1>
    
    </header>
    <!-- side navigaton -->
    <div id="mySidenav" class="sidenav">
        <a href="#" id="about"><i class="fa fa-facebook"></i></a>
        <a href="#" id="blog"><i class="fa fa-blog"></i></a>
        <a href="#" id="projects"><i class="fa fa-book"></i></a>
        <a href="#" id="contact"><i class ="fa fa-phone"></i></a>
    </div>
    <!-- Logo + main-navigation  -->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg border-top border-bottom">
            <div class="container">
             <!--  if logo is image enable this  -->
                <div class="navbar-brand" href="#index.html">
                    <img src="assets/img/logo.jpg" alt="CWS" title="logo"
                        style="height:80px;width: 70px; border-radius: 500px;" />
                </div>
                <a class="navbar-brand" href="index.html"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                School
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="services.html">Infrastructure</a>
                                <a class="dropdown-item" href="blog.html">Blog</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                <a class="dropdown-item" href="single.html">Landing Page</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Me</a>
                        </li>
                    </ul>
                    <form action="search-results.html " class="form-inline position-relative my-2 my-lg-0">
                        <input class="form-control search w-75 d-inline-block" type="search"
                            placeholder="Search here..." aria-label="Search" required="">
                        <button class="btn btn-search" type="submit"><span
                                class="fa fa-search" aria-hidden="true"></span></button>

                    </form>
                </div>

            </div>
        </nav>
    </div>