<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Public/css/index.css">
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
                <a class="navbar-brand" href="">动漫乐园</a>
            </div>
        </nav>

        <div class="line"></div>

        <!--幻灯片-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../Public/images/b.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../Public/images/a.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../Public/images/c.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../Public/images/d.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../Public/images/e.jpg" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="line"></div>

        <!--动漫展示区-->
        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="panel panel-primary">
                <div class="panel-heading">
                    <h4><?php echo ($row["title"]); ?></h4>
                </div>
                <div class="panel-body">
                    <?php echo ($row["content"]); ?>
                </div>
                <div class="panel-footer">
                    <span class="label label-danger">发布时间：</span><span><?php echo (date('Y-m-d H:i:s',$row["time"])); ?></span>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>


        <div class="footer">
            copyright:虾米俊
        </div>
    </div>
</body>
</html>