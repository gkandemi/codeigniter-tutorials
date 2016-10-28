<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeni Kayıt Sayfası</title>
</head>
<body>

<h3>Yeni Kayıt Ekle</h3>

<form action="<?php echo base_url("personel/insert");?>" method="post">

    <label for="title">Personelin Adını Giriniz</label><br>
    <input type="text" id="title" name="title">
    <br>
    <label for="detail">Açıklama</label><br>
    <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Kaydet</button>
    <a href="<?php echo base_url("personel"); ?>">Geri Dön</a>


</form>

</body>
</html>