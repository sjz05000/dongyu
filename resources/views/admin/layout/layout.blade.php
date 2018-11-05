
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/d/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/d/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/d/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/page_page.css" media="screen">


<title>MWS Admin - Form Layouts</title>

</head>

<body>

    <!-- Themer (Remove if not needed) -->  

    <!-- Themer End -->

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/d/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/d/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active" >
                        <a href="#"><i class="icon-picture"></i>广告管理</a>
                        <ul>
                            <li><a href="/admin/advertisements/create">添加广告</a></li>
                            <li><a href="/admin/advertisements">浏览广告</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-list"></i>分类管理</a>
                        <ul>
                            <li><a href="/admin/cate/create">添加类别</a></li>
                            <li><a href="/admin/cate">浏览类别</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-tags"></i>导航管理</a>
                        <ul>
                            <li><a href="/admin/navigation/create">添加导航</a></li>
                            <li><a href="/admin/navigation">浏览导航</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-list-2"></i>文章管理</a>
                        <ul>
                            <li><a href="/admin/article/create">添加文章</a></li>
                            <li><a href="/admin/article">浏览文章</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
            <!-- 提示信息 开始 -->
            @if(session('success'))
                <div class="mws-form-message success">
                    {{session('success')}}
                </div>
            @endif
            @if (session('error'))
                <div class="mws-form-message warning">
                    {{ session('error') }}
                </div>
            @endif
            <!-- 提示信息 结束 -->
            <!-- 内容开始 -->
            <div class="container">
             @section('content')

             @show
            </div>
            <!-- 内容结束 -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                PHP09
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/d/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/d/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/d/js/libs/jquery.placeholder.min.js"></script>
    <script src="/d/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/d/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/d/jui/jquery-ui.custom.min.js"></script>
    <script src="/d/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/d/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/d/plugins/validate/jquery.validate-min.js"></script>

    <!-- Core Script -->
    <script src="/d/bootstrap/js/bootstrap.min.js"></script>
    <script src="/d/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/d/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
</body>
</html>
