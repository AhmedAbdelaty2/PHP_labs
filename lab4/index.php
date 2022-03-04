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

require_once("views/table.php");