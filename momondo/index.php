<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<!-- <body oncontextmenu="return false"> -->
<body">
    <header>
        <div>
            <img src="logo.png" alt="logo" id="logo">
        </div>
        <div>
            <a href="trips">Trips</a>
            <a href="login">Login</a>
            <a href="danish">🏴‍☠️ Dansk</a>
        </div>
    </header>

    <div id="flights-search">
        <div class="settings-div">
            <h1 id="search-welcome" >Velkommen! Find dine billetter her.</h1>

            <label title="settings" for="trip-choices">
                <select name="trip-choices" id="trips">
                    <option value="tur-retur">Tur/Retur</option>
                    <option value="enkelt">Enkelt</option>
                </select>
                <select name="age-choices" id="age">
                    <option value="voksen">Voksen</option>
                    <option value="studerende">Studerende</option>
                    <option value="pensionist">Pensionist</option>
                </select>
                <select name="price-choices" id="price">
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="first">Første</option>
                </select>
                <select name="lugage-choices" id="lugage">
                    <option value="handlugage">Håndbagage</option>
                    <option value="lugage">Bagage</option>
                </select>
            </label>
        </div>


        <form class="search-form">
            <div id="from-container">
                <input id="from-input" type="text" placeholder="from" 
                oninput="show_from_results()">
                <!-- onblur="hide_from_results()" -->
                <div id="from-results">
                    
                </div>
            </div>
            <div id="to-container">
                <input id="to-input" type="text" placeholder="to" 
                oninput="show_to_results()">
                <!-- onblur="hide_to_results()"  -->
                <div id="to-results">
                    
                </div>
            </div>
            <div id="date-container">
                <input class="date-input" type="date" value="<?php echo date('Y-m-d'); ?>">|
                <input class="date-input" type="date" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div>
                <button id="input-btn">Søg</button>
            </div>
        </form>
    </div>

    <div id="main">
        <div id="left">
            Left
        </div>
        <div id="right">
            Right
        </div>
    </div>

    <footer>
        footer
    </footer>

    <script src="app.js"></script>
</body>
</html>