<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        foreach ($alexLib->listbooks() as $libBook) {
        ?>
            <li>
                <ul>
                    <li><?= $libBook->title ?></li>
                    <li><?= $libBook->author ?></li>
                    <li><?= $libBook->year ?></li>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>