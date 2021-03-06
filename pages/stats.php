<!DOCTYPE html>
<html>
<head>
    <title>Statistics</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/stats.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#ffffff">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

  <!--- долните редове са за икона на различни у-ва-->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../images/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../images/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../images/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../images/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="../images/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="../images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="../images/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


</head>

<body>
    <div class="nav_bar" id="navigation">
        <img src="../images/COVID_NEWS-transperent2.png" style="width:200px; height:53px;  background-color: #64BB6A; margin-left: 15px; margin-top: 3px;">
        <div>
            <?php
            session_start();
            if ($_SESSION['loggedin'] == 1) {
                  echo('
                  <a><form class="" action="../" method="post">
                      <input type="hidden" name="logout" value="true">
                      <input type="submit" name="submit" value="Logout">
                  </form></a>
                  ');
            } else {
                  echo('<a href="../profile_control/login.php">Login</a>');
            }?>
            <a href="chat.php">Chat</a>
            <a href="stats.php">Statistics</a>
            <a href="../">News</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <div class="input">
        <input type="text" placeholder="Enter a location to show info" class="in_value">
        <input type="submit" value="Enter" class="btn">
    </div>


    <div class="grid-container">
        <div class="left">
            <div class="div_country">
                <h1 class="country">-</h1>
            </div>
            <div class="content">
                <div class="div_cases">
                    <h1 class="act_cases"> - </h1>
                </div>

                <div class="div_deaths">
                    <h1 class="deaths"> - </h1>
                </div>

                <div class="div_rec">
                    <h1 class="recovered"> - </h1>
                </div>
            </div>
            <div class="hyperChart">
                <h1>Stats about last month</h1>
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <div class="right">
            <div class="map_stats">
                <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map&region=Europe" width="600px" height="500px;"></iframe>

            </div>
            <div class="predics">
                <h1>Predictions for tomorrow</h1>
                <h2 class="predics_tom">-</h2>
                <h2 class="predics_deaths">-</h2>
                <h2 class="predics_rec">-</h2>
            </div>
        </div>
    </div>


    <script src="../sw.js"></script>
    <script src="../js/stats.js"></script>
</body>
</html>
