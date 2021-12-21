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
<div class="up2" >
    <section id="features" style="height: 100%;">
        <div class="ConfigRight2">
        <p class="tekstsg" style=" color:#fff; font-size: 28px; font-weight: bold; width: 100%; text-align: center;" id="naglowekGorny">Odpowiedź na dwa poniższe pytania, aby system mógł dopasować dla cb twój wymażony komputer </p>
        <p class="tekstsg" style=" color:#fff; font-size: 26px; text-align: center;" id="pytanie">Jaki posiadasz budżet na zakup komputera?</p>
            <a class="Neon" href="#" id="odpowiedzPierwsza">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Poniżej 1000zł
            <div class="odpowiedz"></div>
            </a></br>
            <a class="Neon" href="#"  id="odpowiedzDruga">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Od 1000zł do 2000zł
            </a></br>
            <a class="Neon" href="#" id="odpowiedzTrzecia">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Od 2000zł do 3000zł
            </a></br>
            <a class="Neon" href="#" id="odpowiedzCzwarta">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Od 3000zł do 5000zł
            </a></br>
            <a class="Neon" href="#" id="odpowiedzPiata">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Ponad 5000zł
            </a>
        </div>
    </section>
</div>

<!-- STOP -->
    


<script src="styl.js"></script>
<script src="Dopasowanie.js">
</script>

</body>
</html>

