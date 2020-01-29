<?php 
  if(!empty($_GET['q'])){
    $url="https://api.gnavi.co.jp/RestSearchAPI/v3/";
    $keyid="158bc4d31377b81469b8194028dbef45";
    $url=$url."?keyid=".$keyid."&name=". urlencode($_GET['q']);
    $data=file_get_contents($url);
    $data_array= json_decode($data,true);

    $results_name=$data_array["rest"][0]["name"];
    $results_url=$data_array["rest"][0]["url"];
    $results_image=$data_array["rest"][0]["image_url"]["shop_image1"];
    $results_address=$data_array["rest"][0]["address"];
    $results_tel=$data_array["rest"][0]["tel"];
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
    <h1>ぐるなびAPI</h1>
    <form action="" method="GET">
      <input type="text" name="q">
      <input type="submit" value="検索">
    </form>
    <?php 
        // echo $data;
        echo '<p>'.$results_name.'</p>'; 
        echo '<br/>';
        echo '<a href="'.$results_url.'">'.$results_name.'のURL</a>' ;
        echo '<br/>';
        echo '<img src="'.$results_image.'" alt="">' ;
        echo '<p>'.$results_address.'</p>'; 
        echo '<p>'.$results_tel.'</p>' ;
    ?>
      <a href="https://api.gnavi.co.jp/api/scope/" target="_blank">
      <img src="https://api.gnavi.co.jp/api/img/credit/api_155_20.gif" width="155" height="20" border="0" alt="グルメ情報検索サイト　ぐるなび">
      </a>
  </div>
</body>
</html>