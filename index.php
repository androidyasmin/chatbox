<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <style>
  body {
  padding-top: 70px;
}
</style>
  </head>

 




 <body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Sohbet Robotu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="tnavbarsExampleDefaul">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Diller</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Sohbet Kutusu</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Ara" aria-label="Ara">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
      </form>
    </div>
  </nav>
<!-- navbar bitti -->
  <header>
    <div class="container">
      <h3>Soru Cevapların Listesi</h3>
    </div>
  </header>
  <!--baslik bitti -->

<?php
$myData = json_decode(
 '[{No"Dili":"PHP",
  "Soru":"Değişken nasıl tanımlanır?",
  "Cevap":"Değişkenin başına $ konularak tanımlanır",
},
{ "Dili":"PHP",
 "Soru":"Dizgelerin birleştirilmesi naıl gerçekleştirilir?",
 "Cevap":"Dizgeler . işleci ile birleştirilir.",
},
{ "Dili":"C",
 "Soru":"Ekrandan kullanıcı girdisi hangi ifade ile alınır?",
 "Cevap":"Kullanıcı girdisi scanf"
},
{ "Dili":"C",
 "Soru":"Fonksiyonda return ne anlama gelir?",
 "Cevap":"Fonksiyonun dönüş değeri içerdiği anlamına gelmektedir."
}]');



  <?php
foreach($myData as $key=>$item)
{
      echo'
    <tr>
    <th scope="row">$item["No"]</th>
    <td>$item["Dili"]</td>
    <td>$item["Soru"] </td>
    <td>$item["Cevap"]</td>
  </tr>
  }
  </tbody>
</table>';
}
?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
  </html>

