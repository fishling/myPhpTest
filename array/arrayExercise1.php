<?php
/**
* Created by PhpStorm.
* User: fish
* Date: 2015/10/10
* Time: 11:51
*/
?>
<html>
    <body>
        <h1>请输入成绩，用空格隔开</h1>
        <?php
            error_reporting(E_ALL ^ E_NOTICE); //notice的错误不提示
            //接收成绩
            $grade = $_REQUEST['grade'];
            $grades = explode(" ",$grade);
            $allgrade = 0;
            foreach($grades as $k => $v){
                $allgrade += $v;
            }
        ?>
        <form action="arrayExercise1.php" method="post">
            <input type="text" name="grade" value="<?php echo $grade;?>"/>
            <input type="submit" value="开始统计">
        </form>
        <?php
            echo "平均成绩是".$allgrade/count($grades);
        ?>
    </body>
</html>
