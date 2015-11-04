<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/17
 * Time: 17:46
 */
?>

<html>
    <head>
        <title>计算器</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    </head>
    <body>
        <form action="myCalResult.php" method="post">
            <table width="300px">
                <tr><td>第一个数</td><td><input type="text" name="num1"/></td></tr>
                <tr><td>第二个数</td><td><input type="text" name="num2"/></td></tr>
                <tr><td>运算符</td><td>
                    <select name="oper">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td></tr>
                <tr><td colspan="2"><input type="submit" value="计算结果"></td></tr>
            </table>
        </form>
    </body>
</html>