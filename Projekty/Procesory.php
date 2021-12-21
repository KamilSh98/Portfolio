<!DOCTYPE html>
<html lang="pl">
<head>
  <title>CreatePC4You - Procesory</title>

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="jquery.scrollTo.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
  <script src="https://kit.fontawesome.com/20ce087b13.js" crossorigin="anonymous"></script>
  

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
              <li><a href="Procesory.php">Procesor</a></li>
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
		      <img src="images/moon.png" id="icon" alt="">

        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="icon-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Szukaj..." required>
        <button type="submit" class="go-icon"><i class="icon-right-big"></i></button>
      </form>
    </nav>
</div>
<div class="up2" style="height: 50px;">
</div>


<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE INFORMACJI O PODZESPOŁACH-->

<div id="products">
  <h2>Procesory</h2>
  <div class="row">
    <div class="col-4">
      <img src="Products/Procesory/i7-10700K.jpg">
      <div class="info">
        <h4>Procesor Intel Core i7-10700K</h4>
        <p>Intel Core i7-10700F to procesor, który zapewnia wysoką wydajność pracy komputerów stacjonarnych. 
          Posiada taktowanie dochodzące do 5.1 GHz w trybie turbo, 8 rdzeni oraz 16 wątków. 
          Idealnie nadaje się dla wymagających użytkowników oraz profesjonalnych graczy czy twórców treści.</p>
      </div>
      <div class="score">
        <p>1579.00zł</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <button><a href="https://www.mediaexpert.pl/komputery-i-tablety/podzespoly-komputerowe/procesory/procesor-intel-core-i7-10700k-3-8ghz-lga1200-box?utm_source=Ceneo&utm_medium=cpc&utm_content=308974&utm_campaign=2021-12&utm_term=Procesory&ceneo_spo=false">Najtaniej kupisz tutaj!</a></button>
      </div>
    </div>
    <div class="col-4">
      <img src="Products/Procesory/PRBX8070110600KF-1.jpg">
      <div class="info">
        <h4>Procesor Intel Core i5-10600KF</h4>
        <p>Intel Core i5-10600KF to 6-rdzeniowy procesor do obsługi rozbudowanych programów, aplikacji oraz gier. Został wyposażony w szereg technologii, między innymi Intel Hyper-Threading oraz Turbo Boost, które zwiększają jego wydajność. 
          Procesor gwarantuje płynną pracę, przy zachowaniu energooszczędności.</p>
      </div>
      <div class="score">
        <p>939.00zł</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button><a href="https://www.net-s.pl/produkt/intel-core-i5-10600kf-41ghz-lga1200-12m-cache-tray-cpu-1105003;20-c-10?utm_source=ceneo&utm_medium=referral">Najtaniej kupisz tutaj!</a></button>
      </div>
    </div>
    <div class="col-4">
      <img src="Products/Procesory/razen.jpg">
      <div class="info">
        <h4>Procesor AMD Ryzen 7 3700X BOX </h4>
        <p>Procesor AMD Ryzen 7 3700X zapewnia płynne działanie komputera w zastosowaniach biurowych, multimedialnych i gamingowych. 
          Produkt ma 8 wydajnych rdzeni, socket AM4 oraz dopasowany wentylator.</p>
      </div>
      <div class="score">
        <p style="margin-bottom: 20px;">1579.00zł</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <button><a href="https://www.euro.com.pl/procesory/amd-procesor-amd-ryzen-7-3700x.bhtml?gclid=Cj0KCQiA47GNBhDrARIsAKfZ2rA7wX4NHhwvskoCBwfY148YILD-jMRf9JZ09dQdQ13e_vkYFtBfujIaAj0eEALw_wcB&gclsrc=aw.ds">Najtaniej kupisz tutaj!</a></button>
      </div>
    </div>
    <div class="col-4">
      <img src="Products/Procesory/i3.jpg">
      <div class="info">
        <h4>Procesor INTEL Core i3-10100F</h4>
        <p>Hyper-Threading to bardzo interesująca technologia Intela, w której postawiono na wielowątkowość procesora. Oznacza to, że dzięki HT aplikacje działające na podstawie wielu wątków, mogą korzystać z aż dwóch wątków przetwarzania na każdy rdzeń procesora. W praktyce oznacza to, że może on wykonać znacznie więcej zadań i realizować je równocześnie. 
          Na tym jednak możliwości procesora INTEL Core i3-10100F Box się nie kończą.</p>
      </div>
      <div class="score">
        <p>389,00</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button><a href="https://www.mediaexpert.pl/komputery-i-tablety/podzespoly-komputerowe/procesory/procesor-intel-core-i3-10100f-3-6ghz-lga1200-box?gclid=Cj0KCQiA47GNBhDrARIsAKfZ2rCuugwV2KoH76Ux8VS6Dmu0Cbask7biYZd6SV5eIC14Bew7cZUKsVsaAukhEALw_wcB">Najtaniej kupisz tutaj!</a></button>
      </div>
    </div>
    <div class="col-4">
      <img src="Products/Procesory/i5v2.jpg">
      <div class="info">
        <h4>Procesor Intel Core i5-9600K</h4>
        <p>Linia procesorów Intel Core i5 obejmuje jednostki ze średniej półki cenowej. Są to procesory o dość uniwersalnych parametrach – odpowiednie do pracy biurowej, projektowania, gier i wielu innych zastosowań. Procesory Intel Core i5 mają do dyspozycji cztery lub nawet sześć rdzeni, co wpływa korzystnie na komfort ich codziennego użytkowania. 
          Jednostki te są chętnie wybierane do komputerów domowych, biurowych, multimedialnych i gamingowych.
        </p>
      </div>
      <div class="score">
        <p>979.00zł</p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button><a href="https://www.morele.net/procesor-intel-core-i5-9600k-3-7ghz-9-mb-box-bx80684i59600k-4142643/?gclid=Cj0KCQiA47GNBhDrARIsAKfZ2rDlut9pJiG7NhhmKmbRl50tujuA1CTVy14763FAJtCYnLWQL1-MdnIaAnsnEALw_wcB">Najtaniej kupisz tutaj!</a></button>
      </div>
    </div>
  </div>
</div>























<!-- STOP -->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE STOPKI STRONY-->

<footer style="border-top: 3px solid #272727;">
  <div class="products">
    <i class="icon-dropbox"><span class="FooterNames">Produkty</span></i></br></br>
    <a href="Procesory.php"><p class="FooterNames2">Procesory</p></a>
    <p class="FooterNames2">Karty graficzne</p>
    <p class="FooterNames2">Płyty Główne</p>
    <p class="FooterNames2">Dyski twarde</p>
    <p class="FooterNames2">Pamięci RAM</p>
    <p class="FooterNames2">Obudowy</p>
    <p class="FooterNames2">Zasilacze</p> 
  </div>
  <div class="additives">
    <i class="icon-puzzle"><span class="FooterNames">Dodatki</span></i></br></br>
    <p class="FooterNames2">Dodatki w App Store</p>
    <p class="FooterNames2">Inspiracje</p>
    <p class="FooterNames2">Blog</p>
  </div>
  <div class="partners">
    <i class="icon-users"><span class="FooterNames">Partnerzy</span></i></br></br>
    <p class="FooterNames2">Regulamin</p>
    <p class="FooterNames2">Program Partnerski</p>
    <p class="FooterNames2">Program Afiliacyjny</p>
    <p class="FooterNames2">Program Resellerski</p>
    <p class="FooterNames2">Dokumentacja API</p>
  </div>
  <div class="about">
    <i class="icon-info"><span class="FooterNames">O nas</span></i></br></br>
    <p class="FooterNames2">Praca</p>
    <p class="FooterNames2">Media</p>
    <p class="FooterNames2">Polityka Prywatności</p>
    <p class="FooterNames2">Kontakt</p>
  </div>
  <div class="address">
    <i class="icon-location"><span class="FooterNames">Adres</span></i></br></br>
    <p class="FooterNames2">Rzeszów</p>
    <p class="FooterNames2">ul. Dąbrowskiego 40/4</p>
    <p class="FooterNames2">35-312 Rzeszów</p>
  </div>
  <div class="stop" style="clear: both;";></div>
  <div class="socials">
    <a href="http://facebook.com"  rel="noopener" target= "_blank" class="sociallink"><i class="icon-facebook" style="margin-left: 10px;"></i></a>
    <a href="http://twitter.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-twitter" style="margin-left: 10px;"></i></a>
    <a href="http://instagram.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-instagram" style="margin-left: 10px;"></i></a>
    <a href="http://youtube.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-youtube-play" style="margin-left: 10px;"></i></a>
    <a href="http://google.com"rel="noopener" target= "_blank" class="sociallink"><i class="icon-gplus" style="margin-left: 10px:"></i></a>
  </div>
  <div class="footerend"> Wszelkie prawa zastrzeżone &copy; 2021 Dziękujemy za wizytę! </div>
</footer>

<!-- STOP -->
    
<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE ZMIANY KOLORU STRONY-->

<script src="styl.js"></script>

  <!-- STOP -->

</body>
</html>

