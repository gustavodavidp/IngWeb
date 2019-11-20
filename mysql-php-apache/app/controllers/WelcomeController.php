<?php


class HomeController
{
    function __construct()
    {

    }

    function index()
    {
        require_once('views/welcome/index.php');
    }
}
?>