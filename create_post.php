<?php
include "dbconnect.php";
?>
<!DOCTYPE html>

    
    <title>Miiniverse</title>
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="Miiverse">
    <meta name="description" content="Miiverse is a service that lets you communicate with other players from around the world. It is accessible via Wii U and systems in the Nintendo 3DS family.">
    <meta name="keywords" content="Miiverse,ミーバース,任天堂,Nintendo,Wii U,3DS">

    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="ja_JP">
    <meta property="og:locale:alternate" content="es_LA">
    <meta property="og:locale:alternate" content="fr_CA">
    <meta property="og:locale:alternate" content="pt_BR">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:locale:alternate" content="fr_FR">
    <meta property="og:locale:alternate" content="es_ES">
    <meta property="og:locale:alternate" content="de_DE">
    <meta property="og:locale:alternate" content="it_IT">
    <meta property="og:locale:alternate" content="nl_NL">
    <meta property="og:locale:alternate" content="pt_PT">
    <meta property="og:locale:alternate" content="ru_RU">
    <meta property="og:title" content="Miiniverse">
    <meta property="og:type" content="article">
    <meta property="og:url" content="/titles/14866558073037299863/14866558073037299866">
    <meta property="og:image" content="https://web.archive.org/web/20160503055815im_/https://d3esbfg30x759i.cloudfront.net/cip/zlCfzRAaoJoJ-us1fI">
    <meta property="og:description" content="Miiverse is a service that lets you communicate with other players from around the world. It is accessible via Wii U and systems in the Nintendo 3DS family.">
    <meta property="og:site_name" content="Miiverse | Nintendo">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="miiverse.nintendo.net">
    
    <link rel="shortcut icon" href="./ass/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-57x57.png?Ag2tdrIcl30F8RewVb7MpA">
    <link rel="apple-touch-icon" sizes="114x114" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-114x114.png?np5stZwxPtIFygwO41QXAA">
    <link rel="apple-touch-icon" sizes="72x72" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-72x72.png?s4ECPF96pvErA7s03oG3gQ">
    <link rel="apple-touch-icon" sizes="144x144" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-144x144.png?Cp5sZwpS_1aly-SFq8AeIA">
    <link rel="stylesheet" type="text/css" href="./ass/offdevice.css">
      
</head>

  <body class="community-top guest" data-token="" data-static-root="https://d13ph7xrk1ee39.cloudfront.net/">
 
      


    <div id="wrapper">
      <div id="sub-body">
        <menu id="global-menu">
          <li id="global-menu-logo"><h1><a href="./"><img src="./ass/menu-logo.png" alt="Miiverse" width="165" height="30"></a></h1></li>
          <li id="global-menu-login">
            <a href="./create_post.php"><img src="./ass/signin_base.png" width="125" height="35" /></a>
          </li>
        </menu>
      </div>

      
      <div id="main-body">
      <center>
<div id="about">
  <div id="about-inner">
    <div id="about-text">
      <h2 class="welcome-message">Create post</h2>
      <form method="POST">
        <p>Your username: <input type="text" name="usrnme" value="Anonymous" required="" /></p>
        <p>Your Mii data (Enter your Mii Studio data, try obtaining that via any Mii renderer, will be default male Mii if unset): <input type="text" name="miidata" value="0800400308040402020c0301060406020a0000000000000804000a0100214004000214031304170d04000a040109" required="" /></p>
        <p>Body: <input type="text" name="bdy" required="" /></p>
        <input type="submit" class="button" value="Create!" />
      </form>
      <?php
      if(isset($_POST["usrnme"]) || isset($_POST["bdy"]) || isset($_POST["mii"])) {
      $username = mysqli_real_escape_string($conn, $_POST["usrnme"]);
      $mii = mysqli_real_escape_string($conn, $_POST["miidata"]);
      $body = mysqli_real_escape_string($conn, $_POST["bdy"]);
      $ip = mysqli_real_escape_string($conn, $_SERVER["REMOTE_ADDR"]);
      $sql = "INSERT INTO posts (name, body, mii, ip) VALUES ('" . $username . "', '" . $body . "', '" . $mii . "', '" . $ip . "')";
      if(mysqli_query($conn, $sql)){
        echo "Done! </br>";
      }
      else{
        echo "Error! </br>";
      }
    }
      ?>
      
      </div>
    </div>
  </div>
</div>
</center>






      <div id="footer">
        <div id="footer-inner">
          <div class="link-container">
              
              <p><a href="contact.php" class="test-contact-link">Contact Us</a></p>
            
            <p id="copyright"><p>© 2025 SuperDumbMario2. Unrelated to Nintendo or Miiverse.</p></p>
          </div>
        </div>
      </div>
    </div>
  


</body></html>