<?php
include_once "connect_database.php";
session_start();
if(isset($_POST['login']))
{

	$email = $_POST["email"];
	$password = $_POST["password"];
	
	
	
        $conn = db();
		$al_result="SELECT * from alumni_info where 
		al_email='$email' AND pwd='$password'";
		$al_count=$conn->query($al_result);

		if ($al_count && $al_count->num_rows = 1) 
		{
			while($al_row = $al_count->fetch_assoc()) 
			{

				$_SESSION['al_matricNumber']=$al_row['al_mat_no'];
							$_SESSION['al_name']=$al_row['al_name'];
                            $_SESSION['al_email']=$al_row['al_email'];

							header("location:userdashboard.php");
						
					}
   				}
				   else
				   {
					   $al_message="Sorry Invalid Password or UserID. Please Try Again.";
					   echo "<script>$al_message<?script>"; 
					   header("refresh:3;url=index.php");

				   }
			}
		
		
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />
    <title>Log In</title>
    <link
      rel="stylesheet"
      href="../assets/fontawesome-free-5.12.1-web/css/all.css"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="../assets/images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../assets/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon-16x16.png"
    />
    <link rel="manifest" href="../assets/images/site.webmanifest" />
  </head>

  <body>
    <!-- 
        header
     -->
    <header class="section-center">
      <nav class="login-nav navbar">
        <div class="img">
          <img src="../assets/images/logo-nav.png" alt="" />
        </div>
        <div class="ul-nav">
          <i class="fas fa-bars go-home toogle" id="nav-toogle"></i>
          <ul class="hidden" id="ul">
            <li class="btn">
              <a href="../pages/index.html#workings">how it works</a>
            </li>
            <li class="btn">
              <a href="../pages/documentation.html">documentation</a>
            </li>
            <li class="btn">
              <a href="../pages/projects.html">Fund request</a>
            </li>
            <li class="btn"><a href="./login.php">login</a></li>
            <li class="btn"><a href="./signup.php">sign-up</a></li>
          </ul>
        </div>
      </nav>
      <h1>sign in</h1>
    </header>
    <main>
      <form
        class="section-center sign-up"
        method="POST"
        action="?"
      >
        <article>
          <p>Email Address</p>
          <input
            type="email"
            name="email"
            placeholder="Enter username"
            id="email"
          />
        </article>
        <article>
          <p>Password</p>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Enter your password"
          />
        </article>
        <button
          type="submit"
          class=""
          name="login"
          onclick="document.location='../pages/userdashboard.php'"
          class="boxx"
        >
          Log in
        </button>

        <div>
          <div class="flex">
            <p>
              forgot password ?<span class="span"
                ><a href="resetpassword.html"> recover here!</a></span
              >
            </p>
          </div>
          <div class="below">
            <p>Don't have an account?</p>
            <a href="../pages/signup.php" class="trans boxx">Sign up</a>
          </div>
        </div>
      </form>
    </main>
    <footer>
      <section class="section-center">
        <div class="img-container">
          <img src="../assets/images/Logo.svg" alt="" />
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
            <ul class="grid">
              <li>
                <a
                  href="https://www.twitter.com"
                  target="_blank"
                  class="footer-icon"
                >
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.twitter.com"
                  target="_blank"
                  class="footer-icon"
                >
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.twitter.com"
                  target="_blank"
                  class="footer-icon"
                >
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.twitter.com"
                  target="_blank"
                  class="footer-icon"
                >
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </article>
        </section>
      </section>
    </footer>
    <script src="../assets/js/signin.js"></script>
    <!-- <script src="/Front-end/assets/js/script.js"></script> -->
  </body>
</html>

