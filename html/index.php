<?php 
  if(!empty($_GET['q'])){
    $url="https://api.gnavi.co.jp/RestSearchAPI/v3/";
    $keyid="158bc4d31377b81469b8194028dbef45";
    $url=$url."?keyid=".$keyid."&name=". urlencode($_GET['q']);
    $data=file_get_contents($url);
    $data_array= json_decode($data,true);

    $results=$data_array["rest"][1]["name"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Fix_phpfile</h1>
    <form action="" method="GET">
      <input type="text" name="q">
      <input type="submit" value="検索">
    </form>
    <?php 
      echo $data;
      echo $results;
    ?>
  </div>
</body>
</html>