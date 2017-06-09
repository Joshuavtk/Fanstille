<?php

class Index
{
    function __construct()
    {

    }

    function index()
    {
        global $templateParser;
        $templateParser->display('views/index.tpl');
    }

}
