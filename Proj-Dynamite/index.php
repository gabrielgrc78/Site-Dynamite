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
    case "register":
        $getpage = "php/register";
        $header = "registration";
        break;
    case "login":
        $getpage = "php/login";
        $header = "login";
        break;
    case "student":
        $getpage = "html/Students";
        $header = "Students";
        break;
    case "faculty":
        $getpage = "html/faculty";
        $header = "Faculty";
        break;
    default:
        $title = $servername . "";
        $getpage = "html/index";
        break;
}
include_once('php/top.php');
include($getpage . ".html");
include($getpage . ".php");
include_once('php/bottom.php');
