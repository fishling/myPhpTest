<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/26
 * Time: 15:38
 * 文件下载
 */

class FileDownload {
    function download($file_name_res,$file_path){
        $file_name = $file_path.$file_name_res;
        //文件转码。处理中文问题
        $file_name = iconv("utf-8","gb2312",$file_name);
        if(!file_exists($file_name)){
            echo '文件不存在';
            return;
        }
        //打开文件
        $fd = fopen($file_name,'r');
        //获取文件大小
        $file_size = filesize($file_name);

        //设置HTTP相应信息
        //返回的是文件
        header("Content-type:application/octet-stream");
        //按字节返回
        header("Accept-Ranges:bytes");
        //文件大小
        header("Accept-Length:$file_size");
        //文件名
        header("Content-Disposition:attachment;filename=".iconv("utf-8","gb2312",$file_name_res));

        $buffer = 1024;
        $file_count = 0; //记录实际传输的文件大小
        while(!feof($fd) && $file_size-$file_count>0){
            $file_data = fread($fd,$buffer);
            $file_count+=$buffer;
            //把部分数据回送给浏览器
            echo $file_data;
        }

        fclose($fd);
    }
}