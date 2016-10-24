<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste</title>
</head>
<body>

<table border="1">
    <thead>
        <th>Ad Soyad</th>
        <th>Email Adresi</th>
    </thead>
    <tbody>
        <?php foreach($personel_listesi as $personel) { ?>
            <tr>
                <td><?php echo $personel["isim"]; ?></td>
                <td><?php echo $personel["email"]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>



</body>
</html>