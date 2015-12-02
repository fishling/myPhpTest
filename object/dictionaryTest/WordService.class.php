<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/20
 * Time: 15:50
 */

class WordService {
    private $xmldoc;
    private static $filename = "words.xml";

    public function __construct(){
        $this->xmldoc = new DOMDocument('1.0','UTF-8');
        //$this->xmldoc->formatOutput= true;
        $this->xmldoc->load(self::$filename);
    }

    public function addWord($word){
        if($this->searchWord($word,false)) {
            echo '这个单词已经存在';
            return;
        }
        $en = $word->getEn();
        $ch = $word->getCh();

        //得到根节点
        $rootElement = $this->xmldoc->getElementsByTagName("words")->item(0);
        //创建新节点
        $wordElement = $this->xmldoc->createElement("word");
        $enElement = $this->xmldoc->createElement("en",$en);
        $chElement = $this->xmldoc->createElement("ch",$ch);
        $wordElement->appendChild($enElement);
        $wordElement->appendChild($chElement);
        $rootElement->appendChild($wordElement);

        echo $this->xmldoc->saveXML();
        $this->xmldoc->save(self::$filename);
    }

    public function searchWord($word,$isEcho){
        $en = $word->getEn();
        $ch = $word->getCh();

        //得到根节点
        $words = $this->xmldoc->getElementsByTagName("word");
        foreach ($words as $wordElement){
            if(isset($en) && strlen($en) > 0){
                $enElement = $wordElement->getElementsByTagName("en")->item(0)->nodeValue;
                if($en == $enElement){
                    if($isEcho) {
                        echo $wordElement->getElementsByTagName("en")->item(0)->nodeValue . ': '
                            . $wordElement->getElementsByTagName("ch")->item(0)->nodeValue;
                    }
                    return true;
                }
            }else if(isset($ch) && strlen($ch) > 0) {
                $chElement = $wordElement->getElementsByTagName("ch")->item(0)->nodeValue;
                if($ch == $chElement){
                    if($isEcho) {
                        echo $wordElement->getElementsByTagName("ch")->item(0)->nodeValue . ': '
                            . $wordElement->getElementsByTagName("en")->item(0)->nodeValue;
                    }
                    return true;
                }
            }
        }
        if($isEcho) {
            echo '这个单词还不存在';
        }
        return false;
    }
}