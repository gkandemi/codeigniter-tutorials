<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERT islemi</title>
</head>
<body>

<form action="<?php echo base_url("dbislem/insert"); ?>" method="post">
    <input type="text" name="title" placeholder="lütfen isim giriniz..."><br><br>
    <textarea name="detail" cols="30" rows="10" placeholder="lütfen aciklama giriniz"></textarea><br>
    <button type="submit">Kaydet</button>
</form>


</body>
</html>