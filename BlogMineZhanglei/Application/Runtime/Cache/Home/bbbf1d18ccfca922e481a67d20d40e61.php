<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/animation.css"/>
    <link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/PersonalBlog/Public/css/article_content.css"/>
    <script type="text/javascript" src="/PersonalBlog/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/PersonalBlog/Public/js/common.js"></script>
    <script type="text/javascript" src="/PersonalBlog/Public/js/release_article.js"></script>
    <script type="text/javascript" src="/PersonalBlog/Public/js/addLink.js"></script>
    <script type="text/javascript" src="/PersonalBlog/Public/js/addPreNext.js"></script>
<script type="text/javascript">
    var GetLinkInfoUrl='<?php echo U("Admin/Release/Article/GetLinkInfo",'','');?>';
    addLink('life_list','life');
</script>
<title>生活随笔</title>
</head>
<body>
<div class="container body_container">
    <div class="row header">
        <div class="col-md-12 col-sm-12 header_panel">
            <div class="top_nav">
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">博客首页</a></li>
                        <li><a href="read.html" id="read">阅读感悟</a></li>
                        <li><a href="life.html" id="life">生活随笔</a></li>
                        <li><a href="software.html" id="software">软件工程</a></li>
                        <li><a href="english.html" id="english">英语学习</a></li>
                        <li><a href="">留言板</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row main_body">
        <div class="col-md-12 col-sm-12 main_body_panel">
<div class="menu_index" >
    <div class="subHeader" id="life_tab">
        分类：生活随笔（共24篇文章）
    </div>
    <div class="menu_list">
        <ul id="life_list">

        </ul>
    </div>
</div>
</div>
</div>

<div class="row footer">
    <div class="col-md-12 col-sm-12 footer_panel">
        <div class="footer_mid">
            <div class="links">
                <h2>友情链接</h2>
                <ul>
                    <li>
                        <a href="">Ajax</a>
                    </li>
                    <li>
                        <a href="">PHP</a>
                    </li>
                </ul>
            </div>
            <div class="visitors">
                <h2>最新评论</h2>
                <dl>
                    <dt>
                        <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                    </dt>
                    <dd>
                        Dance Smile
                        <time>49分钟前</time>
                    </dd>
                    <dd>
                        给<a href="">ThinkPHP</a>评论:
                    </dd>
                    <dd>
                        文章很好，觉得很有用
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                    </dt>
                    <dd>
                        Vincent
                        <time>一天前</time>
                    </dd>
                    <dd>
                        给<a href="">胖妞</a>评论:
                    </dd>
                    <dd>
                        你很可爱诶！
                    </dd>
                </dl>
            </div>
            <section class="shoot">
                <h2>摄影作品</h2>
                <ul>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/PersonalBlog/Public/images/portrait.gif" alt=""/>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="footer_bottom">
            <p>
                Copyright 2013 Design by
                <a href="#">Vincent</a>
            </p>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        active_menu();
    });
</script>
</body>
</html>