<?php 

if(isset($_GET["lang"]) && $_GET["lang"] == "de"){
  $LANG = "DE";
  $LANGN = "EN";
  echo "<html lang=\"de\"><head><style>.EN{ display: none;}</style>\n";
}
else{
  $LANG = "EN";
  $LANGN = "DE";
  echo "<html lang=\"en\" ><head><style>.DE{ display: none;}</style>\n";
}

        
?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CubesatMGM</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  </head>
  <body>
   <header>
    <div id="logo"><a href="#" onclick="nav('/')"><img src="img/logo.png" height="40px"></a></div>
    <div id="social"><img src="/img/misc/facebook_ico.png" height="24px"><img src="/img/misc/twitter_ico.png" height="24px"></div>
    <div id="lang" onclick="langChange()"><p id="langTop"><?php echo $LANG; ?></p><p id="langBot"><?php echo $LANGN; ?></p></div>
    <div id="menuButton" onclick="menuInflate()"></div>
    <div id="headerSep"></div>
    <nav id="menu">
      <ul>
        <li><a id="a1" href="#" onclick="nav('project')">
          <span class="EN">Project</span> 
          <span class="DE">Projekt</span>
        </a></li>

        <li><a id="a2" href="#" onclick="nav('news')">
          <span class="EN">News</span> 
          <span class="DE">News</span>
        </a></li>

        <li><a id="a3" href="#" onclick="nav('team')">
          <span class="EN">Team</span>
          <span class="DE">Team</span>
        </a></li>

        <li><a id="a4" href="#" onclick="nav('sponsors')">
          <span class="EN">Sponsors</span>
          <span class="DE">Sponsoren</span>
        </a></li>
        <li><a id="a5" href="mailto:someone@example.com?Subject=Hello%20again" onclick="nav('contacts')">
          <span class="EN">Contact</span>
          <span class="DE">Kontakt</span>
        </a></li>
      </ul>
    </nav>
    <div class="clear"></div>
   </header>

   <div id="content">
    <?php 
      if(isset($_GET['site'])){ 
        $site = $_GET['site'];
        if ($site == "project" || $site == "news" || $site == "team" || $site == "sponsors" || $site == "contact") {
          include ('sites/'.$site.'.php');
        } else {
          include ('sites/home.php');
        }
      }else {
        include ('sites/home.php');
      }
    ?>

    <footer>
      
    </footer>
   </div>
   <script type="text/javascript" src="js.js"></script>
  </body>
</html>