<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="<?php echo base_url(); ?>kablosuzkedi/kaydet" method="get">
    <input type="text" name="isim" placeholder="isim giriniz">
    <input type="email" name="email" placeholder="email giriniz">
    <select name="cinsiyet">
        <option value="bay">Bay</option>
        <option value="bayan">Bayan</option>
    </select>
    <button type="submit">Gönder</button>
</form>

</body>
</html>