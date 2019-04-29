<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP: Separating logic from presentation and cycling through array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <ul>
    
        <?php foreach ($person as $feature => $value) : ?>

        <li><strong><?= $feature; ?>: </strong><?= $value; ?></li>

        <?php endforeach; ?>

    </ul>

</body>

</html> 