<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Personel Resim Yükleme</h3>
<form action="<?php echo base_url("fileupload/upload");?>" method="post" enctype="multipart/form-data">
    <input id="dosya" name="file" type="file">
    <button type="submit">Upload!!</button>
</form>

</body>
</html>