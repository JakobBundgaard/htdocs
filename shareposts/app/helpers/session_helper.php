<?php 
session_start();

// Flash message helper
// Format example - flsh('register_succes', 'You are now registered', 'alert alert-danger');
// Display in view - echo flash('register_success');
// Basically we are storing the name as the key and the message as the value
function flash($name = '', $message = '', $class = 'alert alert-success') {
    if(!empty($name)) {
        if(!empty($message) && empty($_SESSION[$name])) {
            // unsetting so we can set later
            if(!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name. '_class'])) {
                unset($_SESSION[$name. '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name. '_class'] = $class;
        } elseif(empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
            echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name. '_class']);
        }
    }
}

