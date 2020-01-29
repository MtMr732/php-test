<?php 
  if(!empty($_GET['q'])){
    $url="https://api.gnavi.co.jp/RestSearchAPI/v3/";
    $keyid="158bc4d31377b81469b8194028dbef45";
    $url=$url."?keyid=".$keyid."&name=". urlencode($_GET['q']);
    $data=file_get_contents($url);
    $data_array= json_decode($data,true);

    $results=$data_array["rest"];
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
    <h1>ぐるなびAPI改</h1>
    <form action="" method="GET">
      <input type="text" name="q">
      <input type="submit" value="検索">
    </form>
    <?php 
      // ↓デバッグ用のデータ
      // echo $data_array;
      // print_r($data_array);
      // echo count($results);
      for($i=0;$i<count($results);$i++){
        echo '<br/>';
        echo $results[$i]["name"];
        echo '<br/>';
        echo '<a href="'.$results[$i]["url"].'">'.$results[$i]["name"].'"のURL"</a>';
        echo '<br/>';
        echo '<img src="'.$results[$i]["image_url"]["shop_image1"].'" alt="">' ;
        echo '<br/>';
        echo $results[$i]["address"];
        echo '<br/>';
        echo $results[$i]["tel"];
        echo '<br/>';
      }
    ?>
    <a href="https://api.gnavi.co.jp/api/scope/" target="_blank">
    <img src="https://api.gnavi.co.jp/api/img/credit/api_155_20.gif" width="155" height="20" border="0" alt="グルメ情報検索サイト　ぐるなび">
    </a>
  </div>
</body>
</html>





