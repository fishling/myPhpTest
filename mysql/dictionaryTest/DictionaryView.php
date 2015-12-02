<html>
    <head>
        <title>词典</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <script>
            function check(){
                var enVal = document.getElementById("en").value;
                var chVal = document.getElementById("ch").value;
                var typeVal = getRadioValue();
                if(typeVal == "add"){
                    if(enVal.length <= 0 || chVal.length <= 0){
                        alert("英文或者中文都需要输入");
                        return false;
                    }
                }else if(typeVal == "search"){
                    if(enVal.length <= 0 && chVal.length <= 0){
                        alert("英文或者中文至少输入一项");
                        return false;
                    }
                }else{
                    return false;
                }
                return true;
            }

            function getRadioValue(){
                var objs = document.getElementsByName("type");
                for(var i=0;i<objs.length;i++) {
                    if (objs[i].checked) {
                        return objs[i].value;
                    }
                }
                return '';
            }
        </script>
    </head>
    <body>
        <form action="DictionaryWork.php" method="post" onsubmit="return check();">
            请输入英文：<input type="text" name="en" /></br>
            请输入中文：<input type="text" name="ch" /></br>
            <input type="radio" name="type" value="add" >增加词库
            <input type="radio" name="type" value="search" >查询词库
            </br>
            <input type="submit" value="开始" />
        </form>
    </body>
</html>