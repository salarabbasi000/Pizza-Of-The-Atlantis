<?php
session_start();
//echo $_GET['name']."<br>".$_GET['type']."<br>".$_GET['price']."<br>";
if($_GET['type']=='pizza' || $_GET['type']=='breverage')
array_push($_SESSION['order'],array('type'=>$_GET['type'],'name'=>$_GET['name'],'size'=>$_GET['size'],'price'=>$_GET['price']));
else if($_GET['type']=='starter')
array_push($_SESSION['order'],array('type'=>$_GET['type'],'name'=>$_GET['name'],'pieces_or_servings'=>$_GET['pps'],'price'=>$_GET['price']));

//unset($_SESSION['breverage_small']);
header("location:../menu_3.php");
?>