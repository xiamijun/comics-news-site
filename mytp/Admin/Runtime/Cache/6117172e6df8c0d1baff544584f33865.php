<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Public/css/index.css">
    <script src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
    <script src="../Public/js/index.js"></script>
</head>
<body>
    <div class="container">
        <!--导航条-->
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="__APP__/Index/index">后台首页</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="__APP__/Login/logout">退出</a></li>
                </ul>
            </div>
        </nav>

        <!--后台内容区-->
        <div class="row row2">
            <div class="col-md-2 left user">
                <div class="list-group">
                    <a href="javascript:" class="list-group-item active">用户管理</a>
                    <a href="__APP__/User/index" class="list-group-item">查看用户</a>
                    <a href="__APP__/User/add" class="list-group-item">添加管理员</a>
                </div>
                <div class="list-group cartoon">
                    <a href="javascript:" class="list-group-item active">发布动漫</a>
                    <a href="__APP__/Cartoon/index" class="list-group-item">查看动漫</a>
                    <a href="__APP__/Cartoon/add" class="list-group-item">添加动漫</a>
                </div>
            </div>
            <div class="col-md-10 right">
                
    <div class="addUser">
        <form action="__URL__/insert" method="post">
            <div class="form-group">
                <label>用户名：</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label>密码：</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="提交">
            </div>
        </form>
    </div>

            </div>
        </div>
    </div>
</body>
</html>