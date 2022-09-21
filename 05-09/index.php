<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        
        
        $data = file_get_contents('dictionary.txt');
        // Convert txt "array" to ass. array
        // $data = json_decode($data);
        $data = json_decode($data, true);
        
    ?>

    <h1>
        
        <!-- <?= $data->en_title ?> -->
        <!-- <?= $data['en_title'] ?> -->
        <?= $data['sp_title'] ?>
    </h1>
 
</body>
</html>