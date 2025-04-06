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
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Miiniverse">
    <meta property="article:published_time" content="2016-02-05T20:10:42Z">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="miiverse.nintendo.net">
    
    <link rel="shortcut icon" href="./ass/favicon.ico?mM9KNw_M04SIP2y9VGgdNA">
    <link rel="apple-touch-icon" sizes="57x57" href="https://web.archive.org/web/20160325202841im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-57x57.png?Ag2tdrIcl30F8RewVb7MpA">
    <link rel="apple-touch-icon" sizes="114x114" href="https://web.archive.org/web/20160325202841im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-114x114.png?np5stZwxPtIFygwO41QXAA">
    <link rel="apple-touch-icon" sizes="72x72" href="https://web.archive.org/web/20160325202841im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-72x72.png?s4ECPF96pvErA7s03oG3gQ">
    <link rel="apple-touch-icon" sizes="144x144" href="https://web.archive.org/web/20160325202841im_/https://d13ph7xrk1ee39.cloudfront.net/img/apple-touch-icon-144x144.png?Cp5sZwpS_1aly-SFq8AeIA">
    <link rel="stylesheet" type="text/css" href="./ass/offdevice.css">
      
</head>

  <body id="post-permlink" class=" guest" data-token="" data-static-root="https://d13ph7xrk1ee39.cloudfront.net/">
 
      


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

<!-- 018307000002000003547938a1c527af -->



<div class="main-column"><div class="post-list-outline">

<section id="post-content" class="post post-subtype-default">

  <header class="community-container">
    
  
    <h1 class="community-container-heading">
      <p>Post</p>
    </h1>
  </header>
<?php
$idd = mysqli_real_escape_string($conn, $_GET["id"]);
$sql = "SELECT * FROM posts WHERE pk='$idd'";
if($posts = mysqli_query($conn, $sql)){
foreach($posts as $posts2){
  $username = $posts2["name"];
  $body = $posts2["body"];
  $mii = $posts2["mii"];
  $yeahs = $posts2["yeahs"];
  $yeahlist = $posts2["yeahlist"];
  $ip = $_SERVER["REMOTE_ADDR"];
  $ip_in_yeahlist = strpos($yeahlist, $ip);
  if($ip_in_yeahlist==false){
    $yeahbuttontext = "Yeah!";
  }
  else{
    $yeahbuttontext = "Unyeah";
  }
echo '<div class="user-content">
    <p class="icon-container"><img src="https://mii-unsecure.ariankordi.net/miis/image.png?erri=sxbsi-rgj&data=' . $mii . '&type=face&width=270" class="icon"></p>
    <div class="user-name-content">
      <p class="user-name"><p>'. htmlentities($username) . '</p></p>
      
    </div>
  </div>
  <div class="body">



    

    


          <p class="post-content-text">' . htmlentities($body) . '</p>




    <div class="post-meta">
      <a href=./toggle_yeah.php?id=' . $idd . '&r=postpage><button type="button" class="symbol submit empathy-button disabled"><span class="empathy-button-text">' . $yeahbuttontext . '</span></button></a>
      <div class="empathy symbol"><span class="symbol-label">Yeahs</span><span class="empathy-count">' . $yeahs . '</span></div>
      
    </div>
  </div>
</section>';
}
}
?>



  <div class="link-container adx-link-container">
    <p><a href="https://web.archive.org/web/20160325202841/http://www.nintendo.com/interest-based-ads-policy" class="test-about-ad-link">Interest-Based Ads</a></p>
    
    <p><a href="https://web.archive.org/web/20160325202841/http://support.nintendo.com/miiversehelp" class="test-contact-link">Contact Us</a></p>
    <p><a href="https://web.archive.org/web/20160325202841/http://www.nintendo.com/corp/privacy.jsp" class="test-privacy-policy-link">Privacy Notice</a></p>
  </div>










</div></div>




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
  


</div></body></html>