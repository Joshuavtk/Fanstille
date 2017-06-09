<?php

class Help
{
    function __construct()
    {

    }

    function index()
    {
        global $templateParser;
        $templateParser->display('views/help/index.tpl');
    }

    function other()
    {
        global $templateParser;
        $templateParser->display('views/help/other.tpl');
    }
}