<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/20
 * Time: 15:59
 */
    require_once 'Word.class.php';
    require_once 'WordService.class.php';

    $wordservice = new WordService();
    $type = $_REQUEST["type"];
    $word = new Word();
    $word->setEn($_REQUEST["en"]);
    $word->setCh($_REQUEST["ch"]);
    if($type == "add"){
        $wordservice->addWord($word);
    }elseif($type == "search"){
        $wordservice->searchWord($word,true);
    }
?>