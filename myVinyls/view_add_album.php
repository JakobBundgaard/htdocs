<?php 

session_start();
$_title = 'Add Album';
require_once __DIR__.'/_x.php';
require_once __DIR__.'/comp_header.php';

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
    
<section class="add-album-section">
    <div class="wrapper">
        <div class="add-album">
            <h4>Add New Album</h4>
            
            <form id="add_album_form" onsubmit= "validate(signup); return false" action="includes/bridge-signup.php" method="post">
                <input type="text" name="artist"
                    class="artist"
                    placeholder="Artist"
                    data-validate = "str"
                    data-min = "<?= _PASSWORD_MIN_LEN ?>"
                    data-max = "<?= _PASSWORD_MAX_LEN ?>">
            
            
                <input type="text" name="album_title" 
                    class="album_title"  
                    placeholder="Album Title"
                    data-validate = "str"
                    data-min = "<?= _USER_NAME_MIN_LEN ?>"
                    data-max = "<?= _USER_NAME_MAX_LEN ?>">

                <input type="text" name="year_released"
                    class="released" 
                    placeholder="Releas Date"
                    data-validate = "int">
                <br>
                <button type="submit" name="submit">Save</button>
            </form>
        </div>
    </div>
</section>


<script src="validator.js"></script>


    <script>
        async function signup() {
            const the_form = document.querySelector('#signup_form')
            console.log(the_form);
            const conn = await fetch('api-signup.php', {
                method: "POST",
                body: new FormData(the_form)
            })
            if( !conn.ok) {
                console.log('Houston we have a problem')
                return;
            }
            const data = await conn.json();
            // Success
            console.log('Username: ' . data.uid)
            
           
        }
    </script>
    
<?php 

require_once __DIR__.'/comp_footer.php';
?>