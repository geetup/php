<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        用户名：<input type="text" name="username"><br/>
        密码：<input type="password" name="pwd"><br/>
<!--        用name分组，后台接受分组的名字 value是辨别得到所选的内容（单选）-->
        性别：<input type="radio" name="sex" value="m">男<br/>
            <input type="radio" name="sex" value="f">女<br/>
        爱好：<input type="checkbox" name="hobby[]" value="跑步">跑步
        <input type="checkbox" name="hobby[]" value="篮球">篮球
        <input type="checkbox" name="hobby[]" value="足球">足球
        <input type="checkbox" name="hobby[]" value="羽毛球">羽毛球
        <select name="school">
            <option value="黑大">黑大
            <option value="农大">农大
            <option value="上大">上大
            <option value="那大">那大
        <input type="submit" value="登陆">
    </form>
</body>
</html>