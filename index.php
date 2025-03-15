<?php
include "dbconnect.php";
?>
<!DOCTYPE html>
<head>   
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
    <meta property="og:site_name" content="Miiniverse">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="miiverse.nintendo.net">
    
    <link rel="shortcut icon" href="./ass/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-57x57.png?Ag2tdrIcl30F8RewVb7MpA">
    <link rel="apple-touch-icon" sizes="114x114" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-114x114.png?np5stZwxPtIFygwO41QXAA">
    <link rel="apple-touch-icon" sizes="72x72" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-72x72.png?s4ECPF96pvErA7s03oG3gQ">
    <link rel="apple-touch-icon" sizes="144x144" href="https://web.archive.org/web/20160503055815im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-144x144.png?Cp5sZwpS_1aly-SFq8AeIA">
    <link rel="stylesheet" type="text/css" href="./ass/offdevice.css">
<style>
  .divable a {
  color: inherit; /* Matches the text color of the parent element */
  text-decoration: none; /* Removes underline */
  font-weight: normal; /* Ensures no bold styling */
  font-style: inherit; /* Matches the font style */
}
</style>
      
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
<div id="about">
  <div id="about-inner">
    <div id="about-text">
      <h2 class="welcome-message">Welcome to Miiniverse!</h2>
      <p>Miiniverse is a Miiverse clone with focus on being lightweight. A lot of core features were removed, including communities, but we still have text posts. You cannot comment on posts, the only interaction with posts is yeahing and sharing.</p>
      <div class="guest-terms-content">
        <a class="symbol guest-terms-link test-guest-terms " href="./tos.php">Miiniverse TOS</a>
      </div>
    </div>
    <img src="./ass/welcome-image.png?GSZx3dDfarzH5Qi3V4b2MQ">
  </div>
</div>







<?php
$sql = "SELECT * FROM posts ORDER BY pk DESC";
if($posts = mysqli_query($conn, $sql)){
foreach($posts as $posts2){
$id = $posts2["pk"];
$username = $posts2["name"];
$body = $posts2["body"];
$mii = $posts2["mii"];
$yeahs = $posts2["yeahs"];
$yeahlist = $posts2["yeahlist"];
$ip = $_SERVER["REMOTE_ADDR"];
$ip_in_yeahlist = strpos($yeahlist, needle: $ip);
if($ip_in_yeahlist==false){
  $yeahbuttontext = "Yeah!";
}
else{
  $yeahbuttontext = "Unyeah";
}

echo '<div class="body-content main-column" id="community-post-list" data-region="">
  
  
  
<div class="via_api" id="via_api-post-list">
  <div class="post-list-outline">
    


    <div class="post-body test-default-post-list-body">
      <div class="list multi-timeline-post-list js-post-list">











<div id="post" onclick="window.open(\'post.php?id=' . $id . '\')" class="post post-subtype-default trigger" tabindex="0">

<div class="body">
    <div class="post-content">
          
          <p class="icon-container" data-pjax="#body"><img src="https://mii-unsecure.ariankordi.net/miis/image.png?erri=sxbsi-rgj&data=' . $mii . '&type=face&width=270" class="icon"></a>
          
          <p class="user-name"><p data-pjax="#body">' . htmlentities($username) . '</a></p>

            <p class="post-content-text">' . htmlentities($body) . '</p>


        <div class="post-meta">
        <a href="./toggle_yeah.php?id=' . $id . '&r=home"><button type="button" class="symbol submit empathy-button disabled" data-community-id="14866558073037299866" data-url-id="AYMHAAACAAADVHlIVAlV_g" data-track-label="default" data-title-id="14866558073037299863" data-track-action="yeah" data-track-category="empathy"><span class="empathy-button-text">' . $yeahbuttontext . '</span></button></a>
          <div class="empathy symbol"><span class="symbol-label">Yeahs</span><span class="empathy-count">' . $yeahs . '</span></div>
          
        </div>

    </div>
  </div>
</div>














</div>
</div>
</div>
  
</div>




</div>';
}
}
?>



      </div>
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