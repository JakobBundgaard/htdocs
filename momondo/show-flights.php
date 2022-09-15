<?php 


 require_once __DIR__.'/dictionary.php';


try {
    $db = new PDO('sqlite:'.__DIR__.'/momondo2.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM flights');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($flights);
}catch(Exception $e) {
    // http_response_code(400);
    echo 'something went wrong';
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>

            <?php
                if($language == 'en')
                {
            ?>
                <a href="?language=dk">Dansk</a>

                <?php
                }

                if($language == 'dk')
                {
            ?>
                <a href="?language=en">Engelsk</a>
    
                <?php  
                }
            ?>
        

    </nav>

    <main>
        <?php 
            foreach($flights as $flight) {
                ?>
                      <div class="flight_<?= $flight['id'] ?>">
                        <img src="cancun.png" alt="flight image">
                        <span><?= $flight['from_city']?></span> 
                        <span><?= $flight['to_city']?></span>
                        <form >
                            <input style="display: none" name="flight_id" value=<?= $flight['id'] ?> type="text">
                            <button  type="button"  onclick="deleteFlight(<?= $flight['id'] ?>)">🗑️ <?=$dictionary[$language.'_delete']?></button >
                        </form>
                    </div>

                <?php
            } 
        ?>
    </main>


  

    <script>
        async function deleteFlight(flight_id) {
            // console.log(document.querySelector('.flight_' + flight_id + ' form'));
            const frm = event.target.form
            // console.log(flight_id);
            const conn = await fetch('api-delete-flight.php', {
                method: "POST",
                body: new FormData(frm)
            })
            const data = await conn.json()
                if(! conn.ok) {
                    console.log(data);
                    return
            }
            console.log(data);
            frm.remove()
        }
    </script>
</body>
</html>