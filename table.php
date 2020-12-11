<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Table</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    

    <?php

        $array_rand = array();

        for ($i = 0; $i < 5; $i++)
            for ($j = 0; $j < 10; $j++)
                $array_rand[$i][$j] = mt_rand(0, 100);
        
    ?>
    <table>
        <?php foreach($array_rand as $items): ?>
        <tr>
            <?php foreach($items as $row): ?>
            <td><?php echo $row; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    

</body>
</html>