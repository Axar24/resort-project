<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Lavishly+Yours&family=Syne+Tactile&display=swap"
      rel="stylesheet"
    />
    <title>Mt. Resort</title>
</head>
<body>
 <!--nav-->
<nav class="navbar navbar-expand-lg navbar-light bg-white  ">
      <div class="container-xxl">
        <a class="navbar-brand text-dark logo fw-bold" href="#"
              ><h1 class="ms-3">Mt.Resort</h1>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#mainnav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end align-item-center"
              id="mainnav"
            >
              <ul class="navbar-nav">
                <li class="nav-item mx-4 my-1">
                  <a class="nav-link" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item mx-4 my-1">
                  <a class="nav-link  href="#">Reviews</a>
                </li>
                <li class="nav-item mx-4 my-1">
                  <a class="nav-link " href="#">Pricing</a>
                </li>
                <li class="nav-item mx-4 my-1 ">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"
                    >Book</a
                  >
                </li>
              <li class="nav-item mx-4 my-2">
                  <button class="btn btn-secondary rounded-circle " type="button" data-bs-toggle="offcanvas" data-bs-target="#useravatar" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-user"></i>
                  </button>
              </li>
            </ul>
            </div>
          
          
          
            <!--offcanvas-->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="useravatar" aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header pb-0">
                <h4 class="offcanvas-title" id="offcanvasExampleLabel"><span class="fs-3"><i class="bi bi-person-circle"></span></i> Username </h4>
                <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
          
              </div>
          
              <div class="offcanvas-body pt-0">
                <h5 class="pb-3">
                 <p class="fs-6 ms-1">joe@example.com</p>
                </h5>
                <div>
                  Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </div>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Dropdown button
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
          
        </div> 
         
      </nav>

<!--secondary nav-->  
  <div class=" select d-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-white  ">
        <div class="container-xxl">
          <a class="navbar-brand text-dark logo fw-bold" href="#"
                ><h1 class="ms-3">Mt.Resort</h1>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#secondarynav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-end align-item-center"
                id="secondarynav"
              >
                <ul class="navbar-nav">
                  <li class="nav-item mx-4 my-1">
                    <a class="nav-link" aria-current="page" href="#">Services</a>
                  </li>
                  <li class="nav-item mx-4 my-1">
                    <a class="nav-link  href="#">Reviews</a>
                  </li>
                  <li class="nav-item mx-4 my-1">
                    <a class="nav-link " href="#">Pricing</a>
                  </li>
                  <li class="nav-item mx-4 my-1 ">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"
                      >Book</a
                    >
                  </li>
                <li class="nav-item mx-4 my-2">
                    <button class="btn btn-secondary rounded-circle " type="button" data-bs-toggle="offcanvas" data-bs-target="#useravatar" aria-controls="offcanvasExample">
                      <i class="fa-solid fa-user"></i>
                    </button>
                </li>
              </ul>
              </div>
    
    
    
              <!--offcanvas-->
              <div class="offcanvas offcanvas-start" tabindex="-1" id="useravatar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header pb-0">
                  <h4 class="offcanvas-title" id="offcanvasExampleLabel"><span class="fs-3"><i class="bi bi-person-circle"></span></i> Username </h4>
                  <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
                </div>
    
                <div class="offcanvas-body pt-0">
                  <h5 class="pb-3">
                   <p class="fs-6 ms-1">joe@example.com</p>
                  </h5>
                  <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                  </div>
                  <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
              Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
    
          </div>
    
        </nav>
  </div>

<!--Slide-->
<section class="banner bg-white ">
<div class="container-xxl ">
    <div id="mainslide" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/245279734.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/245279782.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/245279847.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev " type="button" data-bs-target="#mainslide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainslide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  </section>








<script src="https://kit.fontawesome.com/912d856a22.js" crossorigin="anonymous"></script>
<script src="style.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>