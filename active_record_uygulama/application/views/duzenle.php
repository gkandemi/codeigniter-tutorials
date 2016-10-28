<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt Düzenleme Sayfası</title>
</head>
<body>

<h3>Kayıt Düzenle</h3>
<form action="<?php echo base_url("personel/update/$row->id");?>" method="post">

    <label for="title">Personelin Adını Giriniz</label><br>
    <input type="text" id="title" name="title" value="<?php echo $row->title; ?>">
    <br>
    <label for="detail">Açıklama</label><br>
    <textarea name="detail" id="detail" cols="30" rows="10"><?php echo $row->detail; ?></textarea>
    <br>
    <button type="submit">Kaydet</button>
    <a href="<?php echo base_url("personel"); ?>">Geri Dön</a>


</form>

</body>
</html>