<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/bootstrap.min.css"/>
    <script type="text/javascript" src="/PersonalBlog/Public/js/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/release_article.css"/>
<script type="text/javascript" src="/PersonalBlog/Public/js/release_article.js"></script>
<script type="text/javascript">
    var LoginUrl='<?php echo U("Admin/Release/User/LoginSubmit",'','');?>';
    var AdminIndexUrl='<?php echo U("Admin/Release/Article/add",'','');?>';
</script>
<title>登陆</title>
</head>
<body>
    <div class="container login">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 login_panel">
                <div class="input_panel">
                    <div class="portrait">
                        <center><img src="/PersonalBlog/Public/images/portrait.gif" alt="portrait" class="img-circle"></center>
                    </div>
                    <center>
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                    <input class="form-control" type="text" placeholder="Enter account" id="account">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input class="form-control" type="password" placeholder="Enter password" id="password">
                                </div>
                            </div>
                            <div class="back_info">

                            </div>
                        </form>
                        <div class="btn_submit">
                            <button type="button" class="btn btn-success" id="login_btn">登陆</button>
                        </div>
                    </center>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        login();
    </script>
</body>
</html>