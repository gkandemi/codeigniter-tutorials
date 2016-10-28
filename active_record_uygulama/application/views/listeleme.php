<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listeleme Sayfası</title>
</head>
<body>
<h3>Personel Listesi</h3>
<a href="<?php echo base_url("personel/insertpage"); ?>">[Kayıt Ekle]</a><br><br>
<table border="1">
    <thead>
        <th>id</th>
        <th>Ad Soyad</th>
        <th>Açıklama</th>
        <th>İşlem</th>
    </thead>
    <tbody>

        <?php foreach($rows as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->detail; ?></td>
                <td>
                    <a href="<?php echo base_url("personel/updatePage/$row->id"); ?>">[Düzenle]</a>
                    <a href="<?php echo base_url("personel/delete/$row->id"); ?>">[Sil]</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>

</body>
</html>