<!DOCTYPE html>
<html>
<head>
    <title>慕课商城 - 后台管理</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="/assets/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/assets/admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/assets/admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="/assets/admin/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="/assets/admin/css/compiled/index.css" type="text/css" media="screen" />
    <link href="/assets/admin/css/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/admin/css/compiled/form-showcase.css" type="text/css" media="screen" />
    <!-- open sans font -->

    <!-- lato font -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="brand" href="index.html" style="font-weight:700;font-family:Microsoft Yahei">慕课商城 - 后台管理</a>

        <ul class="nav pull-right">
            <li class="hidden-phone">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-phone">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">6</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>你有 6 个新通知</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> 新用户注册
                                <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> 新用户注册
                                <span class="time"><i class="icon-time"></i> 18 分钟前.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> 新用户注册
                                <span class="time"><i class="icon-time"></i> 49 分钟前.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> 新订单
                                <span class="time"><i class="icon-time"></i> 1 天前.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">查看所有通知</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="notification-dropdown hidden-phone">
                <a href="#" class="trigger">
                    <i class="icon-envelope-alt"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="/assets/admin/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="/assets/admin/img/contact-img2.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="/assets/admin/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                    账户管理
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/index.php?r=admin%2Fmanage%2Fchangeemail">个人信息管理</a></li>
                    <li><a href="/index.php?r=admin%2Fmanage%2Fchangepass">修改密码</a></li>
                    <li><a href="#">订单管理</a></li>
                </ul>
            </li>
            <li class="settings hidden-phone">
                <a href="personal-info.html" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-phone">
                <a href="/index.php?r=admin%2Fpublic%2Flogout" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end navbar -->

<?php echo $content; ?>


