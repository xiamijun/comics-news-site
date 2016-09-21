<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Public/css/index.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="__URL__/check" method="post">
                <div class="form-group">
                    <label>用户名：</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>密码：</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>验证码：</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fcode">
                        </div>
                        <div class="col-md-2">
                            <img class="verify" src="__URL__/verify" onclick="this.src='__URL__/verify/rand='+Math.random()">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="登录">
                    <a class="btn btn-danger" href="__ROOT__/index.php/Index/index">返回首页</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>