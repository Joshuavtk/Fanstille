<?php

class articles
{
    function __construct()
    {

    }

    function index()
    {
        //get articles from the model
        global $templateParser;
        $templateParser->assign('page', $page);
        require_once 'model/getarticles.php';
        $templateParser->assign('pages_amount', $pages_amount);
        $templateParser->assign('articles_list', $result_list);
        $templateParser->display('articles/index.tpl');
    }
}