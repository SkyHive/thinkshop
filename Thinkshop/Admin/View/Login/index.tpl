<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>依米后台登陆界面</title>
    <link rel="stylesheet" type="text/css" href="__APublic__/css/style.css">
    <script src="__APublic__/js/jquery.min.js"></script> 
</head>
<body>
    <div id="houtai">
        <div class="title">后台管理</div>
        <div class="form">
        <form action="__Cont__/Login/login" name="form1" method="post">
            <table>
                <tr><td>账号：</td></tr>
                <tr><td><input type="text" name="a_username" class="f"></td></tr>
                <tr><td class="cuser" style="color:red;font-weight:bold;"></td></tr>
                <tr><td>密码：</td></tr>
                <tr><td><input type="password" name="a_pwd" class="f"></td></tr>
                <tr><td class="cpwd" style="color:red"></td></tr>
                <tr><td><input type="submit" name="sub" class="f" style="height:40px;margin-bottom:10px; font-size:21px;color:white;font-weight:bold;margin-top:10px;cursor:pointer;background:#38a38a;" value="确&nbsp定"></td></tr>
            </table>
        </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('input[type=text]').bind('blur',function() {
                var data={'username':$(this).val()};
                var url='__Cont__/Login/login';
                $.ajax({
                    url:url,
                    type:'get',
                    data:data,
                    success:function(data) {
                        $('td.cuser').text(data);
                    }
                });
            });
        });
    </script>
</body>
</html>