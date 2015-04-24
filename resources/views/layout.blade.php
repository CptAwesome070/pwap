<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Play With a Purpose</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="content">
    <div id="topmenuwrapper">
        <div class="topmenuheader">
            <a id="logo" href="#">Play with a purpose</a>
        </div>
        <div class="topmenuright" style="float:right; margin-top:-20px; margin-right:20px;">
            {{Auth::User()->name}}
        </div>

    </div>

    <div id="sidemenuwrapper">
        <ul id="sidemenu">
            <li style="font-size:13px; color: #00b3ee;  padding-bottom:10px">Navigation</li>
            <li><a class="selected" href="#">Dashboard</a></li>
            <li><a href="#">Stock Control</a></li>
            <li><a href="#">Suppliers</a> </li>
            <li><a href="#">Schools</a></li>
            <li><a href="#">Accounting</a></li>
            <li><a href="{{ url('logout') }}">Logout</a></li>
        </ul>
    </div>
    <div id="main">
          @yield('content')
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('ul > li > ul').css('height', $(window).height() + 'px');
        $('#sidemenu').css('height', $(window).height() + 'px');
        $('#sidemenu').css('padding-top', '30px');
    });
</script>
</body>
</html>
