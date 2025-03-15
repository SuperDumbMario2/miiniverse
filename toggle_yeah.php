<?php
include "./dbconnect.php";
$id = $_GET["id"];
$r = $_GET["r"];
$ip = $_SERVER["REMOTE_ADDR"];
$sql = "SELECT * FROM posts WHERE pk = $id";
if($what = mysqli_query($conn, $sql)){
    foreach($what as $post) {
        $yeahlist = $post["yeahlist"];
        $yeahs = $post["yeahs"];
        $strposhit = strpos($yeahlist, $ip);
        if($strposhit == false){
            $yeahs = $yeahs+1;
            $yeahlist = $yeahlist . ", " . $ip;
            
        }
        else{
            $yeahs = $yeahs-1;
            $yeahlist = str_replace(", " . $ip, "", $yeahlist); 
        }
        $sql = "UPDATE posts SET yeahs = $yeahs, yeahlist = '$yeahlist' WHERE pk = $id";
        if($wtf = mysqli_query($conn, $sql)){
            if($r == "home"){
                $rurl = "./";
            }
            elseif($r == "postpage"){
                $rurl = "./post.php?id=" . $id;
            }
            header('Location: '.$rurl);
        }
    }
}
?>