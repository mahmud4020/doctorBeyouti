<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>My PHP Frontend</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- rotobo font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="header-top">
      <div class="lg-container container-fluid">
        <div class="contact-info">
          <div class="social-icons">
            <a href="#" title="Facebook" class="facebook-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Twitter" class="twitter-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" title="youtube" class="youtube-icon"><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="phone-numbers">
            <a href="tel:+15551234567"><span class="icon me-2"><i class="fa-solid fa-phone"></i></span> +1 (555) 123-4567</a>
            <a href="tel:+15559876543"><span class="icon me-2"><i class="fa-brands fa-whatsapp"></i></span> +1 (555) 987-6543</a>
          </div>
        </div>
      </div>
    </div>


    <div class="header-bottom">
      <div class="lg-container container-fluid">
        <nav class="navbar navbar-expand-lg">
          <div class="w-100 d-flex align-item-center justify-content-between">
            <div>
              <a class="navbar-brand" href="#">
                <img src="../assets/images/Screenshot-2025-04-18-at-8.37.27 PM-1.png" alt="" class="img-fluid">
              </a>
            </div>
            <div class="d-flex align-item-center">
              <div class="d-flex align-item-center">
                <button class="navbar-toggler shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                  <!-- Hamburger Icon -->
                  <svg class="icon open-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1.5 12.5a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1h-13zm0-4a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1h-13zm0-4a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1h-13z" />
                  </svg>

                  <!-- Close Icon -->
                  <svg class="icon close-icon d-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                    viewBox="0 0 16 16">
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                </button>


              </div>

              <div class="d-flex align-item-center">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">DOCTOR</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">GERMAN</a>
                    </li>
                    <li class="nav-item">
                      <button class="btn btn-light">DOWNLOAD</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>