<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- FONT LINKING -->
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
 <link rel="manifest" href="../assets/images/site.webmanifest">
    <title>Donations List</title>
    <style>
        .center {
            text-align: center
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
        }

        td,
        th {
            border: 1px solid #050119;
            text-align: center;
            padding: 8px;
        }

        #button1 {
            padding: 5px 20px;
            background-color: #F9E79F;
            color: black;
            border: 2px solid #FEF9E7;
        }
    </style>

</head>


<body>
<nav class="login-nav navbar">
      <div class="img">
        <img src="../assets/images/logo-nav.png" alt="">
      </div>
      <div class="ul-nav">
        <i class="fas fa-bars go-home toogle" id="nav-toogle"></i>
        <ul class="hidden" id="ul">
          <li class="btn"><a href="../pages/index.html#workings">how it works</a></li>
          <li class="btn"><a href="../pages/documentation.html">documentation</a></li>
          <li class="btn"><a href="../pages/projects.html">Fund request</a></li>
          <li class="btn"><a href="./login.html">login</a></li>
          <li class="btn"><a href="./signup.html">sign-up</a></li>
        </ul>

      </div>

    </nav>
    <header>
        <img src="../assets/images/Rectangle 3.png" alt="">
        <h1>Donations</h1>
    </header>
    <?php
    include_once "../../backend/config.php";
    ?>

    <br>
    <table id="alumni">
        <tr>
            <th>NO </th>
            <th> Name</th>
            <th> Donation Title</th>
            <th> Description</th>
            <th> Donation Amount </th>
        </tr>

        <?php
        $conn = db();
        $sqlshow1 = "SELECT * FROM donation_data";
        $result1 = $conn->query($sqlshow1);
        $no = 1;
        while ($row = $result1->fetch_assoc()) { ?>
            <tr>
                <td> <?= $no++ ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['donation_title'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['amount'] ?></td>
            </tr>
        <?php };
        $conn->close();
        ?>
        <tr>
            <td colspan="5" style='text-align:right'><a href="index.php"> Donate </a> </td>
        </tr>
    </table>

</body>

</html>