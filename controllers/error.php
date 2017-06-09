<?php

class Error
{
    function __construct()
    {

    }

    function index()
    {
        global $templateParser;
        $templateParser->display('error.tpl');
    }
}