$(function() {
    $('input[type=text]').bind('blur',function() {
         var username=$(this).val();
        if(username=='') {
           $('td.cuser').text('账号不能为空');
        }
    });
    $('input[type=password]').bind('blur',function() {
         var pwd=$(this).val();
        if(pwd=='') {
           $('td.cpwd').text('密码不能为空');
        }
    });
});