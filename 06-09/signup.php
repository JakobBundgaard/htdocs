<?php 
 require_once __DIR__.'/_x.php';

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
    
    <form id="signup_form" onsubmit= "validate(signup); return false"  method="POST">
        <label for="">
            Name (min <?= _USER_NAME_MIN_LEN ?> max <?= _USER_NAME_MAX_LEN ?> characters)
        </label>
        <input type="text" name="user_name"
            class="user_name" 
            placeholder="user name"
            data-validate = "str"
            data-min = "<?= _USER_NAME_MIN_LEN ?>"
            data-max = "<?= _USER_NAME_MAX_LEN ?>">
            


        <label for="">
            Last name (min <?= _USER_LAST_NAME_MIN_LEN ?> max <?= _USER_LAST_NAME_MAX_LEN ?> characters)
        </label>
        <input type="text" name="user_last_name" 
            class="user_last_name"
            placeholder="user last name"
            data-validate = "str"
            data-min = "<?= _USER_LAST_NAME_MIN_LEN ?>"
            data-max = "<?= _USER_LAST_NAME_MAX_LEN ?>">



        <input type="text" name="email"
            class="email" 
            placeholder="email"
            data-validate = "email">


        <button>Signup</button>
    </form>

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
            console.log(data.user_name, ' ', data.user_last_name)
            Swal.fire(
                    'Good job! ' + data.user_name + ' ' + data.user_last_name
                    )
        }
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html> 