<?php

class about
{
    function __construct()
    {

    }

    function index()
    {
        //get articles from the model
        global $templateParser;
        require_once 'model/getabout.php';
        $templateParser->assign('about_list', $about_result_list);
        $templateParser->display('about.tpl');
    }
}