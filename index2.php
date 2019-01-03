<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
        <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Sohbet Robotu</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Diller</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sohbet Kutusu</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Ara..." aria-label="Ara">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
</nav>
  
    <br>
     <h1>Soru cevapların listesi:</h1>
    <br>   

<?php
  // JSON string
  $someJSON = '[{"no":"1","dili":"PHP","soru":"Değişken nasıl tanımlanır?","cevap":"Değişkenin başına $ işareti konularak tanımlanır."},{"no":"2","dili":"PHP","soru":"Dizgelerin birleştirilmesi nasıl gerçekleştirilir?","cevap":"Dizgeler '.' işleci ile birleştirilir."},{"no":"3","dili":"C","soru":"Ekrandan kullanıcı girdisi hangi ifade ile alınır?","cevap":"Kullanıcı girdisi \'scanf\' ifadesi ile alınır."},{"no":"4","dili":"C","soru":"Fonksiyonda \'return\' ne anlama gelmektedir?","cevap":"Fonksiyonun dönüş değeri içerdiği anlamına gelmektedir."}]';

  
  echo    '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Dili</th>
      <th scope="col">Soru</th>
      <th scope="col">Cevap</th>
    </tr>
  </thead>
  <tbody>';

  // Jsondan arraye donusturme
  $someArray = json_decode($someJSON, true);
  foreach ($someArray as $key => $value) {
    echo '<tr><th scope="row">' . $value["no"] . '</th>';
    echo "<td>" . $value["dili"] . '</td><td>' . $value["soru"] . '</td><td>' . $value["cevap"] . '</td></tr>';
  }

  echo '
    </tbody>
</table>';
?>


    <footer class="footer">
      <div class="container">
        <span class="text-muted">Sohbet robotu ver. 1.0</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
 
