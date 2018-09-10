<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>爱好</th>
        <th>性别</th>
        <th>年龄</th>
        <th>手机号</th>
    </tr>
   <? foreach( $data as $key=>$val ):?>
    <tr>
        <td><?= $val->id ?></td>
        <td><?= $val->name ?></td>
        <td><?= $val->hobby ?></td>

        <td>
            @if($val->sex ==1)
                男
            @else
                女
            @endif
        </td>
        <td><?= $val->age ?></td>
        <td><?= $val->phone ?></td>

    </tr>
    <? endforeach ;?>
</table>
</body>
</html>