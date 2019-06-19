<?php
error_reporting(E_ERROR);

$page = @$_GET['p'];
switch ($page) {
    case null:
    case "index":
        $getpage = "html/index";
        $header = "home";
        break;
    case "home":
        $getpage = "html/index";
        $header = "home";
        break;
    case "test":
        $getpage = "php/test";
        $header = "test";
        break;
    case "register":
        $getpage = "php/register";
        $header = "registration";
        break;
    case "login":
        $getpage = "php/login";
        $header = "login";
        break;
    case "achievements":
        $getpage = "html/achievements";
        $header = "Achievements";
        break;
    case "contact":
        $getpage = "html/contact";
        $header = "Contact Information";
        break;
    case "database":
        $getpage = "html/database";
        $header = "Database Portal";
        break;
    case "serverstatus":
        $getpage = "html/serverstatus";
        $header = "Server Status";
        break;

    default:
        $title = $servername . "";
        $getpage = "html/index";
        break;
}
include_once('php/top.php');
include_once($getpage . ".html");
include_once($getpage . ".php");
include ('php/bottom.php');
