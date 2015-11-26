<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/26
 * Time: 10:40
 * 文件下载
 */
    require_once 'FileDownload.class.php';

    $file_name_res = $_REQUEST['filename'];
    $file_path = "../resource/";
    //绝对路径
    //$_SERVER['DOCUMENT_ROOT'];

    $fileDownload = new FileDownload();
    $fileDownload->download($file_name_res,$file_path);

?>
