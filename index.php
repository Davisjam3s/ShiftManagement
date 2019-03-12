<?php require 'connection.php'; ?>
<?php require 'CheckSession.php'; ?>

<!DOCTYPE html>
<head>
    <title>shifts 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/LoginChecks.js"></script>
    <script src="MainMenuScripts.js"></script>
    <link rel="stylesheet" type="text/css" href="indexCSS.css">
</head>
    <body>
        <div id="menuContainerBackGround" class="MainMenuBackGround"></div>
        <div class="MainMenu">
            <div  id="LoginButton" class="MainMenuItem">login</div>
            <input type="Number" hidden="true" id="ColleagueNumberLogin" placeholder="Colleague Number">
                <input type="Number" hidden="true" class="" id="ColleagueCodeRandom" placeholder="Enter Code">
                    <span id="LoginGenCode" hidden="true">
                        <script>Random4NumberCode();</script>
                    </span>
                    <button  hidden='true' id='MainMenuItem'class="ColleagueNumberLoginNoCode">Login</button>
                    <button hidden="true" class="ColleagueNumberLoginWithCode">Login</button>
                    <span class="" id="ServerResponse"></span>
                    <div id="ClockInButton" class="MainMenuItem">Clock in</div>
                    <input type="Number" hidden="true" id="ColleagueNumberClockIn" placeholder="Colleague Number">
                        <button hidden="true" id="ClockInConfirm" onclick="">Clock</button>
                        <div class="MainMenuItem">Need Help</div>
                        <div class="MainMenuItem">Whats New</div>
                    </div>
                    <div class="sqlres"></div>
     </body>
</html>