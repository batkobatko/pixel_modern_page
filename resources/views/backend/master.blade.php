<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMIN DASHBOARD | WEBSITE NAME</title>
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/adminstyle.css') }}">
    <script type="text/javascript" src="{{ url('backend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('backend/js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('backend/js/script.js') }}"></script>
</head>
<body>

<div class="sidebar">
    <ul class="sidebar-menu">
        <li><a href="{{ 'admin' }}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bookmark -o"></i> <span>Posts&nbsp;&nbsp;</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('all-posts') }}"><i class="fa fa-eye"></i>All Posts</a></li>
                <li><a href="{{ url('add-post') }}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
                <li><a href="{{ url('viewcategory') }}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-file"></i> <span>Pages&nbsp;&nbsp;</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('all-pages') }}"><i class="fa fa-eye"></i>All Pages</a></li>
                <li><a href="{{ url('add-page') }}"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-image"></i> <span>Advertisements&nbsp;&nbsp;</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('all-advs') }}"><i class="fa fa-eye"></i>All Advs</a></li>
                <li><a href="{{ url('add-adv') }}"><i class="fa fa-plus-circle"></i>Add Adv</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{ url('messages') }}">
                <i class="fa fa-envelope"></i> <span>Messagess&nbsp;&nbsp;</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ url('settings') }}">
                <i class="fa fa-gear"></i> <span>Settings&nbsp;&nbsp;</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <!--
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-plus"></i> <span>Users</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
                <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
            </ul>
        </li>
        -->

    </ul>
</div>
@yield('content')
<br>
<br>


<footer>
        <div class="col-md-12 text-center copyright">
            Copyright &copy; {{ date('Y') }} <a href="https://www.pixelprijedor.com/">| PIXEL |</a> Powered by: pixelprijedor</a>
        </div>
    <div class="col-md-12">
        <span class="pull-right">Version 2.2.3</span>
    </div>
</footer>

<script type="text/javascript" src="{{ url('backend/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('backend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('backend/js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ url('backend/js/script.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
@yield('scripts')
</body>
</html>

