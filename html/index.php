<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php 
    $url="https://api.gnavi.co.jp/RestSearchAPI/v3/" ;
    $keyid="158bc4d31377b81469b8194028dbef45";
    // 検索キーワード
    $name=urlencode($_GET['q']);
    // $url=$url.'?keyid='.$keyid.'&name='.$name;
    // エンドポイントでヒットしたデータを代入
    $data=simplexml_load_file($url);
  ?>
  <form action="index.php" method="GET">
    <input type="text" name="q">
    <input type="submit" value="検索">
  </form>

<div id="result">
  <div>検索結果</div>
  <?php echo $_GET['q']; ?>
  <?php 
    #foreach($data->name as $name){
      echo $name;
    #}
    echo "<pre>";
    var_dump($name);
    echo "</pre>";

  ?>
</div>
</body>
</html>