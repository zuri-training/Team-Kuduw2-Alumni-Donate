<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/userdashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <main class="main-container">
        <div class="sidebar-container notifside">
            <!--Beginning of Sidebar Container markup-->
            <div class="main-logo-container">
                <a href="../pages/index.html"><img src="../assets/logo/alumni donate logo.png" alt="Organization Logo"></a>
            </div>
            <!--End of org logo markup--> <br>
            <a href="../pages/userdashboard.php">
                <div class="account-logo-container" id="active">
                    <div class="acc-content">
                        <img src="../assets/logo/account logo.png" alt="" width="20px" height="20px">
                    </div>
                    <div class="acc-content">
                        <p>Account</p>
                    </div>
                </div>
            </a>
            <!--End of account markup--> <br>
            <a href="../pages/usernotification.html">
                <div class="notification-logo-container">
                    <div class="notification-content">
                        <img src="../assets/logo/notification logo.png" alt="" width="20px" height="20px">
                    </div>
                    <div class="notification-content">
                        <p>Notification</p>
                    </div>
                </div>
            </a>
            <!--End of notification markup--> <br>
            <a href="../pages/donationrequest.html">
                <div class="donation-logo-container">
                    <div class="donation-content">
                        <img src="../assets/logo/hearthand logo.png" alt="" width="20px" height="20px">
                    </div>
                    <div class="donation-content">
                        <p>Donation</p>
                    </div>
                </div>
            </a>
            <!--End of donation markup--> <br>
            <div class="whitespace">1</div>
            <a href="../../backend/logout.php">
                <div class="logout-logo-container">
                    <div class="logout-content">
                        <img src="../assets/logo/logout logo.png" alt="" width="20px" height="20px">
                    </div>
                    <div class="logout-content">
                        <p>Log out</p>
                    </div>
                </div>
            </a>
            <!--End of logout markup-->
            <div class="whiterspace">2</div>
        </div>
        <!--End of Sidebar Container markup-->

        <div class="content-container">
            <!--Beginning of Content Container markup-->
            <div class="acc-info-container">
                <div class="go-home-button">
                    <button onclick="document.location='../pages/index.html'">Go Home</button>
                </div>
                <div class="acct-header">
                    <h1>Account<h1>
                </div>
                <div class="acct-info">
                    <div class="profile-pic">
                        <img src="../assets/images/21284053.jpg" alt="profile picture" width="80px" height="80px">
                    </div>
                    <div class="profile-info">
                        <p class="acc-name"><strong>
                                <h3><?php session_start();
                                    if (isset($_SESSION)) {
                                        echo $_SESSION['fullName'];
                                    } ?></h3>
                            </strong></p>
                        <p class="acc-email"><?php if (isset($_SESSION)) {
                                                    echo $_SESSION['email'];
                                                } ?></p>
                        <p class="acc-studentid"><?php if (isset($_SESSION)) {
                                                        echo $_SESSION['matricNumber'];
                                                    } ?></p>
                    </div>
                    <br>
                    <br>
                    
                </div>
            </div>
            <!--End of acct info markup-->
            <div class="available-donation-container">
                <div class="available-donation-tab">
                    <a href="#">
                        <img src="../assets/images/project-pic.jpg" alt="project picture" width="100%" height="200px">
                        <div class="project-info">
                            <div class="project-tag">EDUCATION</div>
                            <div class="project-title">
                                <h3>Project Donation Title</h3>
                            </div>
                            <div class="funding-info top">
                                <div class="left">100%</div>
                                <div class="right">N200,000/N200,000</div>
                            </div>
                            <hr>
                            <div class="funding-info bottom">
                                <div class="left">Status</div>
                                <div class="right">FUNDED</div>
                            </div>
                            <hr>
                            <div class="lastinfo">
                                <img src="../assets/images/janedoe-pic2.png" alt="">
                                <div>Jane Doe</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="available-donation-tab-add">
                    <p>Add</p>
                    <button>+</button>
                </div>
            </div>
            <!--End of available donation markup-->
        </div>
        <!--End of Content Container markup-->

    </main>
    <footer>
        <section class="section-center">
            <div class="img-container">
                <img src="../assets/logo/alumni donate logo 2.png" alt="Org Logo">
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
        <section class="credit">
            <div>
                Powered by Team Kuduw2
            </div>
            <hr>
        </section>
    </footer>
</body>

</html>