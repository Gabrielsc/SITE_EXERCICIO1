<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('Location:login.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">

    <link rel="stylesheet" type="text/css" href="styles/my_style.css">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">

            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>

                <!-- ICON NAME LOGO -->
                <a id="logo" href="index.html" class="navbar-brand">
                <span class="fa fa-rocket"></span>
                <span class="logo-text">DNS-<small>Extend-WEB</small></span>
                <span style="display: none" class="logo-text-icon">µ</span>
                </a>
            </div>

            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Robert John</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </nav>
            
        </div>
        <!--END TOPBAR-->

        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                    <div class="clearfix"></div>

                    <li class="active"><a href="dashboard.html"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>

                    <li>
                    <a href="zonas-diretas.html"><i class="fa fa-send-o fa-fw">
                        <div class=""></div>
                    </i><span class="menu-title">Zonas diretas</span></a>
                    </li>

                    <li><a href="zonas-reversas.html"><i class="fa fa-slack fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Zonas reversas</span></a>
                    </li>

                    <li><a href="dominio.html"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Dominio</span></a>
                    </li>

                    <li><a href="analisador.html"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Analisador</span></a>
                    </li>

                    <li><a href=""><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Editar</span></a>
                    </li>


                </ul>
            </div>
            </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span>$</span></h4>
                                        <p class="description">
                                            Profit description</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%;" class="progress-bar progress-bar-success">
                                                <span class="sr-only">80% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span><span>$</span></h4>
                                        <p class="description">
                                            Income detail</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span></h4>
                                        <p class="description">
                                            Task completed</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 50%;" class="progress-bar progress-bar-danger">
                                                <span class="sr-only">50% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>128</span></h4>
                                        <p class="description">
                                            Visitor description</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only">70% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mbl">
                            <div class="col-lg-8">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="mbs">
                                                    Network Performance</h4>
                                                <p class="help-block">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                                                <div id="area-chart-spline" style="width: 100%; height: 300px">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="mbm">
                                                    Server Status</h4>
                                                <span class="task-item">CPU Usage (25 - 32 cpus)<small class="pull-right text-muted">40%</small><div
                                                    class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;" class="progress-bar progress-bar-orange">
                                                        <span class="sr-only">40% Complete (success)</span></div>
                                                </div>
                                                </span><span>Memory Usage (2.5GB)<small class="pull-right text-muted">60%</small><div
                                                    class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%;" class="progress-bar progress-bar-blue">
                                                        <span class="sr-only">60% Complete (success)</span></div>
                                                </div>
                                                </span><span>Disk Usage (C:\ 120GB , D:\ 430GB)<small class="pull-right text-muted">55%</small><div
                                                    class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 55%;" class="progress-bar progress-bar-green">
                                                        <span class="sr-only">55% Complete (success)</span></div>
                                                </div>
                                                </span><span>Domain (2/5)<small class="pull-right text-muted">66%</small><div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 66%;" class="progress-bar progress-bar-yellow">
                                                        <span class="sr-only">66% Complete (success)</span></div>
                                                </div>
                                                </span><span>Database (90/100)<small class="pull-right text-muted">90%</small><div
                                                    class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 90%;" class="progress-bar progress-bar-pink">
                                                        <span class="sr-only">90% Complete (success)</span></div>
                                                </div>
                                                </span><span>Email Account (25/50)<small class="pull-right text-muted">50%</small><div
                                                    class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 50%;" class="progress-bar progress-bar-violet">
                                                        <span class="sr-only">50% Complete (success)</span></div>
                                                </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Chats</div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="chat-scroller">
                                            <ul class="chats">
                                                <li class="in">
                                                    <img src="images/avatar/48.jpg" class="avatar img-responsive" />
                                                    <div class="message">
                                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                                ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                                </li>
                                                <li class="out">
                                                    <img src="images/avatar/48.jpg" class="avatar img-responsive" />
                                                    <div class="message">
                                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                                            class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum
                                                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                                ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                                </li>
                                                <li class="in">
                                                    <img src="images/avatar/48.jpg" class="avatar img-responsive" />
                                                    <div class="message">
                                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                                ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                                </li>
                                                <li class="out">
                                                    <img src="images/avatar/48.jpg" class="avatar img-responsive" />
                                                    <div class="message">
                                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                                            class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum
                                                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                                ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                                </li>
                                                <li class="in">
                                                    <img src="images/avatar/48.jpg" class="avatar img-responsive" />
                                                    <div class="message">
                                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                                                ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat-form">
                                            <div class="input-group">
                                                <input id="input-chat" type="text" placeholder="Type a message here..." class="form-control" /><span
                                                    id="btn-chat" class="input-group-btn">
                                                    <button type="button" class="btn btn-green">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mbl">
                            <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="profile">
                                            <div style="margin-bottom: 15px" class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h2>
                                                        John Doe</h2>
                                                    <p>
                                                        <strong>About:</strong> Web Designer / UI.</p>
                                                    <p>
                                                        <strong>Hobbies:</strong> Read, out with friends, listen to music, draw and learn
                                                        new things.</p>
                                                    <p>
                                                        <strong class="mrs">Skills:</strong><span class="label label-green mrs">html5</span><span
                                                            class="label label-green mrs">css3</span><span class="label label-green mrs">jquery</span></p>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure><img src="images/avatar/128.jpg" alt="" style="display: inline-block" class="img-responsive img-circle"/>
                                                    <figcaption class="ratings"><p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a></p></figcaption>
                                                </figure>
                                                </div>
                                            </div>
                                            <div class="row text-center divider">
                                                <div class="col-xs-12 col-sm-4 emphasis">
                                                    <h2>
                                                        <strong>20,7K</strong></h2>
                                                    <p>
                                                        <small>Followers</small>
                                                    </p>
                                                    <button class="btn btn-yellow btn-block">
                                                        <span class="fa fa-plus-circle"></span>&nbsp; Follow
                                                    </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 emphasis">
                                                    <h2>
                                                        <strong>245</strong></h2>
                                                    <p>
                                                        <small>Following</small>
                                                    </p>
                                                    <button class="btn btn-blue btn-block">
                                                        <span class="fa fa-user"></span>&nbsp; Profile
                                                    </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 emphasis">
                                                    <h2>
                                                        <strong>43</strong></h2>
                                                    <p>
                                                        <small>Snippets</small>
                                                    </p>
                                                    <div class="btn-group dropup">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-orange dropdown-toggle">
                                                            <span class="fa fa-gear"></span>&nbsp; Options
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu pull-right text-left">
                                                            <li><a href="#"><span class="fa fa-envelope"></span>&nbsp; Send an email</a></li>
                                                            <li><a href="#"><span class="fa fa-list"></span>&nbsp; Add or remove from a list</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#"><span class="fa fa-warning"></span>&nbsp; Report this user for spam</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#" role="button" class="btn disabled">Unfollow</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Todo List</div>
                                    </div>
                                    <div style="overflow: hidden;" class="portlet-body">
                                        <ul class="todo-list sortable">
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    Sed ut perspiciatis unde omnis iste</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                                    minus id</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    Et harum quidem rerum facilis est</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="" /></div>
                                                <div class="todo-title">
                                                    Excepteur sint occaecat cupidatat non proident</div>
                                                <div class="todo-actions pull-right clearfix">
                                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                        </i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="timeline-centered timeline-sm">
                                    <article class="timeline-entry">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>12:45 AM</span><span>Today</span></time>
                                        <div class="timeline-icon bg-violet"><i class="fa fa-exclamation"></i></div>
                                        <div class="timeline-label"><h4 class="timeline-title">New Project</h4>

                                            <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p></div>
                                    </div>
                                </article>
                                    <article class="timeline-entry left-aligned">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>9:15 AM</span><span>Today</span></time>
                                        <div class="timeline-icon bg-green"><i class="fa fa-group"></i></div>
                                        <div class="timeline-label bg-green"><h4 class="timeline-title">Job Meeting</h4>

                                            <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette.</p></div>
                                    </div>
                                </article>
                                    <article class="timeline-entry">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-09T13:22" class="timeline-time"><span>8:20 PM</span><span>04/03/2013</span></time>
                                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                                        <div class="timeline-label bg-orange"><h4 class="timeline-title">Daily Feeds</h4>

                                            <p><img src="http://lorempixel.com/45/45/nature/3/" alt="" class="timeline-img pull-left"/>Parsley amaranth tigernut silver beet maize fennel spinach ricebean black-eyed. Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p></div>
                                    </div>
                                    <div class="timeline-entry-inner">
                                        <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i></div>
                                    </div>
                                </article>
                                </div>
                            </div>
                            <!--<div class="col-lg-4">
                            <div id="my-calendar"></div>
                        </div>-->
                            <div class="col-lg-4">
                                <div class="page-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="portlet box">
                                                <div class="portlet-header">
                                                    <div class="caption">
                                                        Pie with gradient fill</div>
                                                    <div class="tools">
                                                        <i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config"
                                                            class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div id="pie-with-gradient-fill">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Scatter plot</div>
                                        <div class="tools">
                                            <i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config"
                                                class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="angular-gauge">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2015 © KAdmin Responsive Multi-Purpose Template</a>
                    </div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
