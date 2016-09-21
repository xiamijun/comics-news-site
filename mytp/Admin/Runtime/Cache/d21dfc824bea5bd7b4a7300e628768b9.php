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
                
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr class="active">
                <th>id</th>
                <th>用户名</th>
                <th>密码(md5加密)</th>
                <th>是否管理员（1为是，0为否）</th>
            </tr>
            <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr class="danger">
                    <td><?php echo ($row["id"]); ?></td>
                    <td><?php echo ($row["username"]); ?></td>
                    <td><?php echo ($row["password"]); ?></td>
                    <td><?php echo ($row["isadmin"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>

            </div>
        </div>
    </div>
</body>
</html>