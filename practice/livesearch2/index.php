<?php 

require_once('DB.php');

$db = new DB();
$data = $db->viewData();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search Demo 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Live Search</h1>

    <form action="search.php" method="POST">
        <input type="text" name="name" placeholder="Search Here" id="searchBox" oninput="search(this.value)">
    </form>

    <ul id="dataViewer">
        <?php foreach($data as $i) { ?>
        <li><?php echo $i['name']; ?></li>
        <?php } ?>
    </ul>


    <script src="main.js"></script>

</body>
</html>