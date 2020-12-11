<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
           padding-top: 3em;
       }
   </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="table.php">Table</a></li>
            </ul>
        </div>
    </nav>
<div class="container">
   <form action="handler.php" method="post">
       Name: <input type="text" name="name"><br>
       E-mail: <input type="text" name="email"><br>
       <input type="submit" class="btn">
   </form>
</div>
</body>
</html>