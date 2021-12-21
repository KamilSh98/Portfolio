<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
    $email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: Login.php");
			die;
		}else
		{
			echo "Podano niepoprawne infomracje!";
		}

    if ($password!=$password2)
		{
			$_SESSION['epassword']="Podane hasła nie są identyczne!";

		}	
	}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
  <title>CreatePC4You - Strona Główna</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content ="IE=edge,chrome=1">
  <meta name="Description" content="Strona jest projektem powstałym w celu nauki HTML,CSS oraz PHP" />
  <meta name="Keywords" content="komputer, podzespoły, składanie, komputery, karty, graficzne, procesory, podzespoły" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="Stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="css/magnifier.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="jquery.scrollTo.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>

</head>
<body>

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE GÓREJ CZEŚCI STRONY W DUŻEJ ROZDZIELCZOŚCI-->

<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="icon-th-list"></i></label>
      <div class="content">
      <div class="logo"><a href="Home.php"><h1 style="logoMain">CreatePC4You</h1></a></div>
        <ul class="links">
          <li><a href="Home.php">Strona główna</a></li>
          <li><a href="Onas.php">O nas</a></li>
          <li>
            <a href="Home.php" class="desktop-link">Podzespoły</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Podzespoły</label>
            <ul>
              <li><a href="#">Procesor</a></li>
              <li><a href="#">Chłodzenie procesora</a></li>
              <li><a href="#">Płyta główna</a></li>
              <li><a href="#">Pamięć RAM</a></li>
              <li><a href="#">Karta graficzna</a></li>
              <li>
                  <a href="#" class="desktop-link">Dysk twardy</a>
                  <input type="checkbox" id="show-items">
                  <label for="show-items">Dysk twardy</label>
                  <ul>
                    <li><a href="#">Dyski HDD</a></li>
                    <li><a href="#">Dyski SSD</a></li>
                    <li><a href="#">Dyski M2</a></li>
                  </ul>
              </li>
              <li><a href="#">Zasilacz</a></li>
              <li><a href="#">Obudowa</a></li>
                </ul>
              </li>
          <li><a href="Login.php">Logowanie</a></li>
          <li><a href="Registration.php">Rejestracja</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="icon-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Szukaj..." required>
        <button type="submit" class="go-icon"><i class="icon-right-big"></i></button>
      </form>
    </nav>
  </div>
<div class="up2">
    <div id="login">
        <form action="" class="logins" method="post">
            <h2 class="NagRej">Rejestracja</h2>
            <div class="inputBox">
                <input type="text" name="user_name" id=""></input>
                <span>Login</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id=""></input>
                <span>Hasło</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password2" id=""></input>
                <span>Powtórz Hasło</span>
            </div>
            <?php
              if (isset($_SESSION['epassword']))
              {
                echo '<div class="error">'.$_SESSION['epassword'].'</div>';
                unset($_SESSION['epassword]']);
              }
            ?>
            <div class="inputBox">
                <input type="email" name="email" id=""></input>
                <span>E-mail</span>
            </div>
            <input type="checkbox" name="regulamin" required><a style="color: hsl(194, 98%, 48%);" required > Akceptuję regulamin </a></input>
            <div class="inputBox">
                <input type="submit" value="Zarejestruj"></input>
                <input type="reset" value="Zresetuj"></input>
                <a href="Login.php" style="color: hsl(194, 98%, 48%);">Posiadam już konto na tej stronie</a>
            </div>
        </form>
    </div>
</div>

<!-- STOP -->
    
<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE ZMIANY KOLORU STRONY-->

<script src="styl.js"></script>

  <!-- STOP -->

</body>
</html>

