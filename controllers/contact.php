<?php

class contact
{
    function __construct()
    {

    }

    function index()
    {
        //contact
        global $templateParser;
        $title = "Contact";
        $templateParser->assign('myTitle',$title);
        $templateParser->display('contact.tpl');
    }
}