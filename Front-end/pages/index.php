<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni Donate</title>
    <link href="fontawesome6.2.0/css/fontawesome.css" rel="stylesheet" />
    <link href="fontawesome6.2.0/css/brands.css" rel="stylesheet" />
    <link href="fontawesome6.2.0/css/solid.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <section class="hero">
      <header class="menu_wrapper">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a href="index.php" class="navbar-brand">
              <img src="../assets/image/logo.png" class="img-fluid" alt="" />
            </a>

            <button
              class="navbar-toggler"
              data-bs-toggle="collapse"
              data-bs-target="#menu"
              area-controls="menu"
              area-expanded="false"
              area-label="Toggle navigation"
            >
              <i class="fas fa-stream navbar-toggler-icon text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a
                    href=""
                    class="text-white nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                  >
                    <!-- <i class="fa-solid fa-bars"></i> -->
                    Browse
                  </a>
                  <ul class="dropdown-menu bg-dark shadow">
                    <li>
                      <a href="#workings" class="text-white dropdown-item">
                        How it works
                      </a>
                    </li>
                    <li>
                      <a href="../pages/documentation.html" class="text-white dropdown-item">
                        Documentation
                      </a>
                    </li>
                    <li>
                      <a href="../pages/projects.html" class="text-white dropdown-item">
                        Fund Request
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="login.php" class="text-white nav-link">
                    <!-- <i class="fa-solid fa-location-dot"></i> -->
                    Login
                  </a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input
                  class="btn btn-sm btn-warning me-2"
                  type="button"
                  value="Sign up"
                  onclick="document.location='../pages/signup.php'"
                />
              </form>
            </div>
          </div>
        </nav>
      </header>

      <center>
        <h6 class="small-title">Alumni Donate</h6>
      </center>
      <h1 class="title-text text-white text-center">
        Raising funds to build the
        <br />
        Institutions of our
        <br />
        dreams
      </h1>
      <div class="hero-btn d-flex justify-content-center mx-auto">
        <button class="btn btn-lg btn-warning me-2" type="button" onclick="document.location='../pages/login.html'">
          Create project
        </button>
        <button class="btn btn-outline-light me-2" type="button" onclick="document.location='../pages/projects.html'">
          Donate
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
    </section>

    <section class="top_box">
      <p class="text-center">
        Alumni Donate is a Nigerian donation-type crowdfunding service. Where
        college students in any part of the country can quickly and easily
        create projects to raise funds around the world for their mates, for
        institutions, for the community and for charity
      </p>
      <center>
        <button class="btn btn-lg btn-warning me-2" type="button" onclick="document.location='../pages/documentation.html'">
          Learn more
        </button>
      </center>
    </section>

    <section class="first_section mt-5">
      <h3 class="text-center tick-title" id="workings">How Alumni Donate works</h3>
      <p class="text-center">
        Create a fund raising campaign in just 3 simple steps and collect your
        funds without delay
      </p>
      <br />
      <br />
      <div class="container">
        <div class="row">
          <div
            class="col-md-4 d-flex flex-column justify-content-center align-items-center"
          >
            <h4
              class="number mb-4 d-flex justify-content-center align-items-center"
            >
              1
            </h4>
            <h4 class="mb-4">CREATE PROJECT</h4>
            <ul
              class="d-flex flex-column justify-content-center align-items-center"
            >
              <li>Sign up for free</li>
              <li>Click create project</li>
              <li>Describe your project</li>
              <li>Add pictures or video</li>
            </ul>
          </div>
          <div
            class="col-md-4 d-flex flex-column justify-content-center align-items-center"
          >
            <h4
              class="number mb-4 d-flex justify-content-center align-items-center"
            >
              2
            </h4>
            <h4 class="mb-4">SHARE LINKS</h4>
            <ul
              class="d-flex flex-column justify-content-center align-items-center"
            >
              <li>Sign up for free</li>
              <li>Spread your campaign to the world</li>
              <li>Get donations from funders</li>
              <li>Get support from alumnus</li>
            </ul>
          </div>
          <div
            class="col-md-4 d-flex flex-column justify-content-center align-items-center"
          >
            <h4
              class="number mb-4 d-flex justify-content-center align-items-center"
            >
              3
            </h4>
            <h4 class="mb-4">RECEIVE FUNDS</h4>
            <ul
              class="d-flex flex-column justify-content-center align-items-center"
            >
              <li>Close your campaign</li>
              <li>Request for your funds</li>
              <li>Receive funds within</li>
              <li>3 working days</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="second_section mt-5 pt-5">
      <div class="container">
        <h3 class="text-center tick-title">Discover projects</h3>
        <p class="text-center">
          Alumnus around the world are starting projects to help organisation and
          community grow.
        </p>
        <h3 class="trending">Trending Projects</h3>

       
        <div class="row">
        <?php
include_once "connect_database.php";
$conn = db();
$sqlshow1 = "SELECT * FROM donation_data";
$result1 = $conn->query($sqlshow1);
while ($row=$result1->fetch_assoc()){ ?>
          <div class="col-md-4 p-4">
            <div class="card h-100">
              <img
                src="https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <span class="badge m-2"><?=$row['title']?></span>
                <p class="card-text mb-3">
                <?=$row['description']?>
                </p>
                <div
                  class="amount mb-3 d-flex flex-row justify-content-between"
                >
                  <h6>45.57%</h6>
                  <h6>₦56,000/N<?=$row['amount']?></h6>
                </div>
                <div class="progress mb-4">
                  <div
                    class="progress-bar bg-warning"
                    role="progressbar"
                    aria-label="Warning example"
                    style="width: 25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div
                  class="amount mb-3 d-flex flex-row justify-content-between"
                >
                  <h6>
                    <img src="../assets/logo/share logo.png" alt="">
                    &nbsp; Share
                  </h6>
                  <h6>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    &nbsp;Donate
                  </h6>
                </div>
                <div class="line"></div>
                <div
                  class="mt-3 d-flex flex-row align-item-center justify-item-center"
                >
                  <img src="image/icon.png" class="img-fluid icon" alt="" />
                  &nbsp;
                
    <p><?=$row['name']?></p>
    </div>
    </div>
          
          </div>
        </div>
    <?php }?>
                
          
         
        </div>
       
      </div>
    </section>

    <!-- <section class="section-subscribe bg-light">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-12- mb-4">
              <h1 class="heading">Newsletter</h1>
            </div>

            <div class="col-md-12">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Please enter your email address"
                    />
                  </div>

                  <div class="col-md-4" mb-4>
                    <input
                      type="submit"
                      class="btn btn-secondary w-100"
                      value="Subscribe"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="card-footer text_color">
      <div class="margin_style">
        <a href="" class="">
          <img src="/Front-end/assets/image/logo.png" class="img-fluid navbar-brand" alt="" />
        </a>
      </div>
      <div class="row footer_background">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <h4>COMPANY</h4>
          <h6>About Us</h6>
          <h6>Get in Touch</h6>
          <h6>Terms of Service</h6>
          <h6>Privacy Policy</h6>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <h4>RESOURCES</h4>
          <h6>How it works</h6>
          <h6>White paper</h6>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <h4>QUICK LINKS</h4>
          <h6>Home</h6>
          <h6>campaign</h6>
          <h6>FAQs</h6>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <h4>COMMUNITY</h4>
          <div class="social_link d-flex align-item-center gap-4">
            <a href="">
              <i class="fa-brands fa-facebook social_style"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>

          <div class="social_link d-flex align-item-center gap-4">
            <a href="">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <footer>
    <section class="section-center">
      <div class="image-container">
        <img src="../assets/images/Logo.svg" alt="">
      </div>
      <section class="footer-flex">
        <article>
          <h3>company</h3>
          <ul>
            <li><a href="../pages/documentation.html"> about us</a></li>
            <li><a href="#"> get in touch</a></li>
            <li><a href="#"> terms of services</a></li>
            <li><a href="#"> privacy policy</a></li>
        </ul>
    </article>
    <article>
        <h3>resources</h3>
        <ul>
            <li><a href="../pages/index.html#workings">how it works</a></li>
            <li><a href="#">white paper</a></li>
           
        </ul>
    </article>
    <article>
        <h3>Quick Links</h3>
        <ul>
            <li><a href="../pages/index.html">home</a></li>
            <li><a href="#">Campaigns</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        </article>
        <article>
          <h3>community</h3>
          <ul class="grid-social">
            <li> <a href="https://www.twitter.com" target="_blank" class="footer-icon">
              <img src="../assets/logo/twitter logo.png" alt="">
            </a></li>
            <li> <a href="https://www.facebook.com" target="_blank" class="footer-icon">
              <img src="../assets/logo/facebook logo.png" alt="">
            </a></li>
            <li> <a href="https://www.instagram.com" target="_blank" class="footer-icon">
              <img src="../assets/logo/ig logo.png" alt="">
            </a></li> 
            <li> <a href="https://www.linkedin.com" target="_blank" class="footer-icon">
              <img src="../assets/logo/linkedin logo.png" alt="">
            </a></li> 
          </ul>
        </article>

    </section> 
    <hr>
  </section>
    <section class="credit">
      <div>
          Powered by Team Kuduw2
      </div>
      <hr>
    </section>

  </footer>

    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/solid.min.js"></script>
  </body>
</html>
