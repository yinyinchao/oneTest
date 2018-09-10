<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <table border="1">
        <form action="goods/add" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <tr>
                <td>用户姓名</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="1">男
                    <input type="radio" name="sex" value="0">女
                </td>
            </tr>
            <tr>
                <td>爱好</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="听歌" >听歌
                    <input type="checkbox" name="hobby[]" value="学习" >学习
                    <input type="checkbox" name="hobby[]" value="看电视" >看电视
                    <input type="checkbox" name="hobby[]" value="玩" >玩

                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td>
                    <select name="age">
                       @for($i=1;$i<=100;$i++){
                        <option value="{{$i}}}}">{{$i}}</option>
                        }@endfor
                    </select>
                </td>
            </tr>
            <tr>
                <td>手机号</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="提交">
                </td>

            </tr>
        </form>
    </table>
</center>
</body>
</html>