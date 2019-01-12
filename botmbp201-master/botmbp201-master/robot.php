<?php require "header.php"; 
$answer = "";

    if($_POST){
       $soru  = $_POST['soru'];
       $dil = $_POST['dil'];
       $data = file_get_contents('data.json');
       $data = json_decode($data,true);
       foreach($data as $arr){
           if( $arr['soru'] == $soru &&  $arr['dili'] == $dil){
                $message[] = [
                    'soru' => $soru,
                    'dil' => $dil,
                    'cevap' => $arr['cevap']
                ];
                if(! isset($_COOKIE['chat']) ){
                    setcookie("chat", json_encode($message), time() + 3600);
                }else{
                    $cookie = json_decode($_COOKIE['chat'],true);
                    $newCookie = array_merge($cookie,$message);
                    setcookie("chat", json_encode($newCookie), time() + 3600);
                }
                break;
           }
       }
       header("location:robot.php");
    }
?>
<br> 
    <div class="container">
    <form method="post" action="robot.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Soru</label>
    <input name="soru" value="Değişken nasıl tanımlanır?" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dil</label>
    <input name="dil" value="PHP" type="text" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Onayla</button>
</form>
<br>
<?php 

if($_COOKIE){
    $messages = json_decode($_COOKIE['chat']);
    foreach($messages as $message){
        echo '<div class="alert alert-primary" role="alert">';
            echo "<b>Dil:</b> ".$message->dil."<br/>";
            echo "<b>Soru:</b> ".$message->soru."<br/>";
            echo "<b>Cevap:</b> ".$message->cevap."<br/>";
        echo '</div>'; 
    }
} 
?>
</div>
<?php require "footer.php"; ?> 