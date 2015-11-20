<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <script language="JavaScript">
            function selType(val){
                if(val == 'jisuan'){
                    jisuanTable.style.display = "block";
                    circuitAreaTable.style.display = "none";
                }else if(val == 'circuitArea'){
                    jisuanTable.style.display = "none";
                    circuitAreaTable.style.display = "block";
                }
            }

            function check(){
                var num1Val = document.getElementById("num1").value;
                var num2Val = document.getElementById("num2").value;
                if(isNaN(num1Val) || isNaN(num2Val)){
                    alert("请输入数字");
                    return false;
                }
            }
        </script>
    </head>
    <!-- 两种写法 -->
    <!--form action="CalculateWork.php" method="post">
        <h1>四则运算</h1>
        第一个数：<input type="text" name="num1" /></br>
        第二个数：<input type="text" name="num2" /></br>
        运算符号：
        <select name="oper">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </br>
        <input type="hidden" name="doType" value="siZeYunSuan"/>
        <input type="submit" value="开始计算" />
    </form>
    </br>

    <form action="CalculateWork.php" method="post">
        <h1>计算圆形面积</h1>
        半径：<input type="text" name="radius" /></br>
        <input type="hidden" name="doType" value="circuitAreaCal"/>
        <input type="submit" value="开始计算" />
    </form>
    </br-->

    </br>
    <form action="CalculateWork.php" method="post" onsubmit="return check();">
        <input type="radio" name="doType" value="siZeYunSuan" onclick="selType('jisuan')">四则运算
        <input type="radio" name="doType" value="circuitAreaCal" onclick="selType('circuitArea')">计算圆形面积

        <table id="jisuanTable" style="display: none">
            <tr><td>请输入第一个数</td><td><input type="text" name="num1" /></td></tr>
            <tr><td>请输入第二个数</td><td><input type="text" name="num2" /></td></tr>
            <tr><td>请选择运算符号</td><td>
                    <select name="oper">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td></tr>
            <tr><td colspan="2"><input type="submit" value="开始计算" /></td></tr>
        </table>

        <table id="circuitAreaTable" style="display: none">
            <tr><td>请输入半径</td><td><input type="text" name="radius" /></td></tr>
            <tr><td colspan="2"><input type="submit" value="开始计算" /></td></tr>
        </table>
    </form>
</html>

