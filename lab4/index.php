<?php

session_start();
//use Illuminate\Database\Capsule\Manager as DB;

require_once("vendor/autoload.php");

DBHandler::connect();

$index = (isset($_GET["index"]) && is_numeric($_GET["index"]) && $_GET["index"] > 0) ? (int) $_GET["index"] : 0;
$all_requrds = DBHandler::get_data($index);
$next_index = (($index + _Pager_size_)<15)?$index + _Pager_size_:15;
$next_link = "http://localhost/lab4/index.php?index=$next_index";
$previous_index = (($index - _Pager_size_)>=0)?$index - _Pager_size_:0;
$previous_link = "http://localhost/lab4/index.php?index=$previous_index";

if(isset($_GET["glass"]) && is_numeric($_GET["glass"]) && $_GET["glass"] >= 0){
    require_once("views/details.php");
}elseif(isset($_GET["search"])){
    $all_requrds = $all_requrds->where("product_name",$_GET["search"]);
    require_once("views/table.php");
}else{
    require_once("views/table.php");
}