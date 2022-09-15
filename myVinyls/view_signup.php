<?php 

session_start();
$_title = 'Sign up';
require_once __DIR__.'/_x.php';

require_once __DIR__.'/comp_header.php';
// require_once __DIR__.'/classes/class_dbHandler.php';
// require_once __DIR__.'/classes/class_signup-contr.php';
// require_once __DIR__.'/classes/class_signup.php';

// require_once __DIR__.'/includes/bridge-signup.php';

?>


<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form id="signup_form" onsubmit= "validate(signup); return false" action="includes/bridge-signup.php" method="post">
                <input type="text" name="uid" 
                    class="user_name"  
                    placeholder="Username"
                    data-validate = "str"
                    data-min = "<?= _USER_NAME_MIN_LEN ?>"
                    data-max = "<?= _USER_NAME_MAX_LEN ?>">

                <input type="password" name="pwd"
                    class="pwd"
                    placeholder="Password"
                    data-validate = "str"
                    data-min = "<?= _PASSWORD_MIN_LEN ?>"
                    data-max = "<?= _PASSWORD_MAX_LEN ?>">

                <input type="password" name="pwdrepeat"
                    class="pwdrepeat"
                    placeholder="Repeat Password"
                    data-validate = "str"
                    data-min = "<?= _PASSWORD_MIN_LEN ?>"
                    data-max = "<?= _PASSWORD_MAX_LEN ?>">

                <input type="email" name="email"
                    class="email" 
                    placeholder="email"
                    data-validate = "email">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
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
            console.log(data)
            
            
           
        }
    </script>
    
<?php 

require_once __DIR__.'/comp_footer.php';
?>