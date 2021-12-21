var odpowiedzPierwsza = document.getElementById("odpowiedzPierwsza");
var odpowiedzDruga = document.getElementById("odpowiedzDruga");
var odpowiedzTrzecia = document.getElementById("odpowiedzTrzecia");
var odpowiedzCzwarta = document.getElementById("odpowiedzCzwarta");
var odpowiedzPiata = document.getElementById("odpowiedzPiata");
var pytanie = document.getElementById("pytanie");
var naglowekGorny = document.getElementById("naglowekGorny");

odpowiedzPierwsza.onclick = function(){
  pytanie.innerHTML = "W jakim celu ma być używany ten komputer?";
  odpowiedzPierwsza.innerHTML = "Do grania w gry komputerowe";
  odpowiedzDruga.innerHTML = "Do pracy zdalnej lub stacjonarnej w firmie";
  odpowiedzTrzecia.innerHTML = "Do swobodnego używania";
  odpowiedzCzwarta.remove(odpowiedzCzwarta);
  odpowiedzPiata.remove(odpowiedzPiata);

  odpowiedzPierwsza.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Procesor:<br> Intel Xeon E3 1220v3 (i5 4460) - 150 zł <br><br> Pamięć RAM:<br> 2x4GB DDR3 1600Mhz - 100 zł <br><br> Płyta główna:<br> Asus H81M-K  - 120 zł <br><br> Dysk SSD: <br> PNY 120GB SATA3 - 99 zł <br><br> Dysk HDD: <br> WD Blue 500GB SATA3 - 30 zł <br><br> Obudowa: <br>iBox Passion v5  - 159zł <br><br> Chłodzenie procesora: <br>MSI GamingX GTX950 2GB 250 zł <br><br> Zasilacz:<br> Chieftec iArena 450W - 60 zł'
  }

  odpowiedzDruga.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Procesor:<br> Intel Xeon E3 1220v3 (i5 4460) - 150 zł <br><br> Pamięć RAM:<br> 2x4GB DDR3 1600Mhz - 100 zł <br><br> Płyta główna:<br> Asus H81M-K  - 120 zł <br><br> Dysk SSD: <br> PNY 120GB SATA3 - 99 zł <br><br> Dysk HDD: <br> WD Blue 500GB SATA3 - 30 zł <br><br> Obudowa: <br>iBox Passion v5  - 159zł <br><br> Chłodzenie procesora: <br>MSI GamingX GTX950 2GB 250 zł <br><br> Zasilacz:<br> Chieftec iArena 450W - 60 zł'  
    
  }

  odpowiedzTrzecia.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Procesor:<br> Intel Xeon E3 1220v3 (i5 4460) - 150 zł <br><br> Pamięć RAM:<br> 2x4GB DDR3 1600Mhz - 100 zł <br><br> Płyta główna:<br> Asus H81M-K  - 120 zł <br><br> Dysk SSD: <br> PNY 120GB SATA3 - 99 zł <br><br> Dysk HDD: <br> WD Blue 500GB SATA3 - 30 zł <br><br> Obudowa: <br>iBox Passion v5  - 159zł <br><br> Chłodzenie procesora: <br>MSI GamingX GTX950 2GB 250 zł <br><br> Zasilacz:<br> Chieftec iArena 450W - 60 zł'  
  }
}

odpowiedzDruga.onclick = function(){
  pytanie.innerHTML = "W jakim celu ma być używany ten komputer?";
  odpowiedzPierwsza.innerHTML = "Do grania w gry komputerowe";
  odpowiedzDruga.innerHTML = "Do pracy zdalnej lub stacjonarnej w firmie";
  odpowiedzTrzecia.innerHTML = "Do swobodnego używania";
  odpowiedzCzwarta.remove(odpowiedzCzwarta);
  odpowiedzPiata.remove(odpowiedzPiata);

  odpowiedzPierwsza.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzDruga.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzTrzecia.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }
}

odpowiedzTrzecia.onclick = function(){
  pytanie.innerHTML = "W jakim celu ma być używany ten komputer?";
  odpowiedzPierwsza.innerHTML = "Do grania w gry komputerowe";
  odpowiedzDruga.innerHTML = "Do pracy zdalnej lub stacjonarnej w firmie";
  odpowiedzTrzecia.innerHTML = "Do swobodnego używania";
  odpowiedzCzwarta.remove(odpowiedzCzwarta);
  odpowiedzPiata.remove(odpowiedzPiata);

  odpowiedzPierwsza.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzDruga.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzTrzecia.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }
}

odpowiedzCzwarta.onclick = function(){
  pytanie.innerHTML = "W jakim celu ma być używany ten komputer?";
  odpowiedzPierwsza.innerHTML = "Do grania w gry komputerowe";
  odpowiedzDruga.innerHTML = "Do pracy zdalnej lub stacjonarnej w firmie";
  odpowiedzTrzecia.innerHTML = "Do swobodnego używania";
  odpowiedzCzwarta.remove(odpowiedzCzwarta);
  odpowiedzPiata.remove(odpowiedzPiata);

  odpowiedzPierwsza.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzDruga.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzTrzecia.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }
}

odpowiedzPiata.onclick = function(){
  pytanie.innerHTML = "W jakim celu ma być używany ten komputer?";
  odpowiedzPierwsza.innerHTML = "Do grania w gry komputerowe";
  odpowiedzDruga.innerHTML = "Do pracy zdalnej lub stacjonarnej w firmie";
  odpowiedzTrzecia.innerHTML = "Do swobodnego używania";
  odpowiedzCzwarta.remove(odpowiedzCzwarta);
  odpowiedzPiata.remove(odpowiedzPiata);

  odpowiedzPierwsza.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzDruga.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }

  odpowiedzTrzecia.onclick = function(){
  odpowiedzPierwsza.remove(odpowiedzCzwarta);
  odpowiedzDruga.remove(odpowiedzPiata);
  odpowiedzTrzecia.remove(odpowiedzCzwarta);
  naglowekGorny.innerHTML = "Oto komponenty, które dobraliśmy do budowy twojego komputera: <br> Podzespoły komputera: ";
  pytanie.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie et ipsum ac sodales. Pellentesque eleifend sagittis odio, at fermentum lacus euismod ac. In ac elit tellus. Proin quis mattis libero. Pellentesque rutrum magna in vehicula pharetra. Nam scelerisque, dolor luctus ultricies sollicitudin, risus nisl gravida felis, ac posuere orci est a ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur nec ullamcorper est.'
  }
}
