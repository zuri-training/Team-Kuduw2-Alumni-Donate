<?php
include_once "connect_database.php";


if(isset($_POST['register']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $schoolName = $_POST['schoolName'];
    $matricNumber = $_POST['matricNumber'];
    $level = $_POST['level'];

  $conn = db();
    $query = "SELECT * FROM alumni_info WHERE al_email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      echo "User already exists. Please <a href='/signup.php'>Click Here</a> to try again.";
      exit;
     }
	
	if ($fullname=='' || $email=='' || $matricNumber==""|| $schoolName=='' || $level=="" || $password=="")
	{
		echo "<br><br>";
		echo "Incomplete information. Please try again.";
		echo "<br/><br/>"; 
		echo "Redirecting you back to main page in 10 seconds.";
		echo "<br/><br/>"; 
		echo "Or click <a href='./index.html'>here.</a>";
		header("refresh:10;url=./index.html" );
	}
	else
	{
      $conn = db();
      
	
      $register_alumni = "INSERT INTO alumni_info (al_name,al_mat_no,al_school,al_email, al_level, pwd ) 
			VALUES ('$fullname', '$matricNumber', '$schoolName','$email', '$level','$password') ";

		if ($conn->query($register_alumni)) 
		{
				include './subsuccess.html';
			header("refresh:5;url=./login.php" );
			
		} 
		else 
		{
    		echo "Error: " . $register_alumni . "<br>" . $conn->error;
			header("refresh:10;url=./signup.php" );
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/fontawesome-free-5.12.1-web/css/all.css">
  <title>Sign Up</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
  <link rel="manifest" href="../assets/images/site.webmanifest">
</head>

<body>

  <header class="section-center">
    <nav class="login-nav navbar">
      <div class="img">
        <img src="../assets/images/logo-nav.png" alt="">
       </div>
       <div class="ul-nav">
        <i class="fas fa-bars go-home toogle" id="nav-toogle"></i>
        <ul class="hidden" id="ul">
      <li class="btn"><a href="../pages/index.html#workings" >how it works</a></li>
      <li class="btn"><a href="./documentation.html">documentation</a></li>
      <li class="btn"><a href="../pages/projects.html" >Fund request</a></li>
      <li class="btn"><a href="./login.php">login</a></li>
      <li class="btn"><a href="./signup.php">sign-up</a></li>
        </ul>
       
       </div>
    </nav>
    <div class="create-project">
      <div>
        <h2>Sign Up</h2>
        <h4>enter your details to begin your registration</h4>
      </div>


  </header>


  <main>
    <section class="">
      <form class="sign-up" method="POST" action="?">
        <article>
          <p>Full Name</p>
          <input type="text" name="fullname" id="fullname" placeholder="Enter your first and last name" required>
        </article>
        <article>
          <p>Email</p>
          <input type="email" name="email" id="email" placeholder="Enter your email address" required>
        </article>
        <article>
          <p>Password</p>
          <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </article>
        <article>
          <p>School name</p>
          <input type="text" name="schoolName" id="schoolName" placeholder="Enter the name of your school" required>
        </article>
        <article>
          <p>Matric. no</p>
          <input type="text" name="matricNumber" id="matricNumber" placeholder="Enter your matriculation number"
            required>
        </article>
        <article>
          <p>Level</p>
          <input type="text" name="level" id="level" placeholder="Enter your level" required/>
        </article>
<button type="submit" class="box" name="register">Register</button>
        <div>
          
          <div class="flex">
            <p>forgot password ?<span class="span"><a href="resetpassword.html"> recover here!</span</a>
            </p>
          </div>
          <div class="below">
            <p>already have an account?</p>
            <a href="login.php" class="trans boxx">login</a>
          </div>

        </div>
      </form>

    </section>
  </main>
  <!-- 
---------------------------
        footer below
        ------------
      -->
  <footer>
    <section class="section-center">
      <div class="img-container">
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
          <ul class="grid">
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

  </footer>
  <script src="../assets/js/signin.js"></script>
  <!-- <script src="/Front-end/assets/js/script.js"></script> -->
</body>

</html>