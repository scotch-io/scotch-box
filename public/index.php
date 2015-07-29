<!doctype html>
<!--[if lt IE 7 ]><html itemscope itemtype="http://schema.org/Product" id="ie6" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie7" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie8" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie9" class="ie" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 9]><!--><html itemscope itemtype="http://schema.org/Product" lang="en-US" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <!--
       d888888o.       ,o888888o.        ,o888888o. 8888888 8888888888 ,o888888o.    8 8888        8
     .`8888:' `88.    8888     `88.   . 8888     `88.     8 8888      8888     `88.  8 8888        8
     8.`8888.   Y8 ,8 8888       `8. ,8 8888       `8b    8 8888   ,8 8888       `8. 8 8888        8
     `8.`8888.     88 8888           88 8888        `8b   8 8888   88 8888           8 8888        8
      `8.`8888.    88 8888           88 8888         88   8 8888   88 8888           8 8888        8
       `8.`8888.   88 8888           88 8888         88   8 8888   88 8888           8 8888        8
        `8.`8888.  88 8888           88 8888        ,8P   8 8888   88 8888           8 8888888888888
    8b   `8.`8888. `8 8888       .8' `8 8888       ,8P    8 8888   `8 8888       .8' 8 8888        8
    `8b.  ;8.`8888    8888     ,88'   ` 8888     ,88'     8 8888      8888     ,88'  8 8888        8
     `Y8888P ,88P'     `8888888P'        `8888888P'       8 8888       `8888888P'    8 8888        8

    8 888888888o       ,o888888o.  `8.`8888.      ,8'
    8 8888    `88.  . 8888     `88. `8.`8888.    ,8'
    8 8888     `88 ,8 8888       `8b `8.`8888.  ,8'
    8 8888     ,88 88 8888        `8b `8.`8888.,8'
    8 8888.   ,88' 88 8888         88  `8.`88888'
    8 8888888888   88 8888         88  .88.`8888.
    8 8888    `88. 88 8888        ,8P .8'`8.`8888.
    8 8888      88 `8 8888       ,8P .8'  `8.`8888.
    8 8888    ,88'  ` 8888     ,88' .8'    `8.`8888.
    8 888888888P       `8888888P'  .8'      `8.`8888.
    -->
    <title>Scotch Box ♥ A Vagrant LAMP Stack for Beginners That Just Works</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="http://scotch.io/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        ::selection {
            background: #000;
            color: #fff;
        }
        ::-moz-selection {
            background: #000;
            color: #fff;
        }
        body {
            font-family: 'Pathway Gothic One', sans-serif;
            height: 2000px;
        }
        a {
            -webkit-transition: all 310ms ease;
            -moz-transition: all 310ms ease;
            transition: all 310ms ease;
            text-decoration: none !important;
        }
        section {
            position: relative;
        }
        #topper {
            margin-top: 51px;
            height: 450px;
            text-align: center;
        }
        #topper svg {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #topper h1 {
            position: absolute;
            color: #fff;
            left: 50%;
            top: 50%;
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            margin: 0;
            font-size: 80px;
            text-transform: uppercase;
        }
        #topper h1 i {
            color: rgb(255, 157, 157);
        }
        article {
            padding: 50px 0;
        }
        article table {
            background: #e3e3e3;
        }
        article .content .wrap {
            background: rgba(255, 27, 53, 0.8);
            margin-bottom: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        article .content .wrap h2 {
            margin: 10px 0 15px;
            color: #fff;
        }
        article .content .wrap td {
            font-size: 20px;
        }
        article .fa-times {
            color: rgb(255, 69, 69);
        }
        article .fa-check {
            color: rgb(0, 179, 64);
        }
        #site-footer {
            background: #05003D;
            padding: 100px 0;
            color: #e3e3e3;
            font-size: 35px;
        }
        #site-footer a {
            color: #fff;
        }
        #site-footer a:hover {
            color: rgb(144, 255, 184);
        }
    </style>

</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Scotch Box</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="http://box.scotch.io">Docs</a></li>
                    <li><a href="http://github.com/scotch-io/scotch-box">Star on GitHub</a></li>
                    <li><a href="http://scotch.io">Scotch.io</a></li>
                    <li><a href="https://twitter.com/scotch_io">@scotch_io</a></li>
                    <li><a href="https://twitter.com/nickforthought">@nickforthought</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="topper" style="background-image: url('data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns="http://www.w3.org/2000/svg" version="1.1"><defs id="defs4"><filter color-interpolation-filters="sRGB" id="filter3115"><feTurbulence type="fractalNoise" numOctaves="1" baseFrequency="0.9" id="feTurbulence3117"/><feColorMatrix result="result5" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 6 -4.15 " id="feColorMatrix3119"/><feComposite in2="result5" operator="in" in="SourceGraphic" result="result6" id="feComposite3121"/><feMorphology in="result6" operator="dilate" radius="20" result="result3" id="feMorphology3123"/></filter></defs><rect width="100%" height="100%" x="0" y="0" id="rect2985" fill="#000000"/><rect width="100%" height="100%" x="0" y="0" id="rect2985" style="fill:#0785FF;filter:url(#filter3115)"/></svg>'); ?>');">
        <h1>Welcome to<br>Scotch Box 2.0 <i class="fa fa-heart"></i></h1>
    </section>

    <article>
        <div class="container">

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>System Stuff</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>OS</td>
                            <td>Ubuntu 14.04 LTS (Trusty Tahr) </td>
                        </tr>
                        <tr>
                            <td>PHP Version</td>
                            <td><?php echo phpversion(); ?></td>
                        </tr>
                        <tr>
                            <td>Ruby 2.2.x</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Vim</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Git</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>cURL</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Imagick</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Composer</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Beanstalkd</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Node</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Database Stuff</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <?php
                        $mysql_exists = FALSE;
                        if (extension_loaded('mysql') or extension_loaded('mysqli')) :
                            $mysql_exists = TRUE;
                        endif;
                        $mysqli = @new mysqli('localhost', 'root', 'root');
                        $mysql_running = TRUE;
                        if (mysqli_connect_errno()) {
                            $mysql_running = FALSE;
                        } else {
                            $mysql_version = $mysqli->server_info;
                        }

                        $mysqli->close();
                        ?>
                        <tr>
                            <td>MySQL is installed</td>
                            <td><i class="fa fa-<?php echo ($mysql_exists ? 'check' : 'times'); ?>"></i></td>
                        </tr>
                        <tr>
                            <td>MySQL is connected</td>
                            <td><i class="fa fa-<?php echo ($mysql_running ? 'check' : 'times'); ?>"></i></td>
                        </tr>
                        <tr>
                            <td>MySQL Version</td>
                            <td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
                        </tr>


                        <?php
                        $psql_is_connected = FALSE;
                        $psql_conn = pg_connect('host=localhost port=5432 dbname=scotchbox user=root password=root');
                        if ($psql_conn) $psql_is_connected = TRUE;
                        $psql_version = pg_version($psql_conn)['client'];
                        pg_close($psql_conn);
                        ?>
                        <tr>
                            <td>PostgreSQL is installed</td>
                            <td><i class="fa fa-<?php echo ($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
                        </tr>
                        <tr>
                            <td>PostgreSQL is connected</td>
                            <td><i class="fa fa-<?php echo ($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
                        </tr>
                        <tr>
                            <td>PostgreSQL Version</td>
                            <td><?php echo ($psql_version ? $psql_version : 'N/A'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Caching stuff</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <?php
                        $redis = new Redis();
                        $redis->connect('127.0.0.1', 6379);
                        ?>
                        <tr>
                            <td>Redis</td>
                            <td><i class="fa fa-<?php echo ($redis->ping() ? 'check' : 'times'); ?>"></i></td>
                        </tr>

                        <?php
                        $memcached_running = FALSE;
                        $memcached_version = FALSE;
                        $memcached_version = FALSE;
                        if (class_exists('Memcache')) :
                            $m = new Memcached();
                            if ($m->addServer('localhost', 11211)) {
                                $memcached_running = TRUE;
                                $memcached_version = $m->getVersion();
                                $memcached_version = current($memcached_version);
                            }
                        endif;
                        ?>
                        <tr>
                            <td>Memcached running</td>
                            <td><i class="fa fa-<?php echo ($memcached_running ? 'check' : 'times'); ?>"></i></td>
                        </tr>
                        <tr>
                            <td>Memcached version</td>
                            <td><?php echo ($memcached_version ? $memcached_version : 'N/A'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Node/NPM Stuff</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>Grunt</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Bower</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Yeoman</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Gulp</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Browsersync</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>PM2</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Laravel Stuff</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>Laravel Installer</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Laravel Envoy</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Blackfire Profiler</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>MySQL Database Credentials</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>Hostname</td>
                            <td>localhost</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>root</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>root</td>
                        </tr>
                        <tr>
                            <td>Database</td>
                            <td>scotchbox</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>PostgreSQL Database Credentials</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>Hostname</td>
                            <td>localhost</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>root</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>root</td>
                        </tr>
                        <tr>
                            <td>Database</td>
                            <td>scotchbox</td>
                        </tr>
                        <tr>
                            <td>Port</td>
                            <td>5432</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>SSH Credentials</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>SSH Host</td>
                            <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
                        </tr>
                        <tr>
                            <td>SSH User</td>
                            <td>vagrant</td>
                        </tr>
                        <tr>
                            <td>SSH Password</td>
                            <td>vagrant</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>All PHP Modules</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <?php
                        $modules = get_loaded_extensions();
                        asort($modules);
                        foreach ($modules as $extension) :
                        ?>
                        <tr>
                            <td><?php echo $extension; ?></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>
    </article>

    <footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="http://box.scotch.io">Scotch Box</a> by <a href="http://scotch.io">scotch.io</a>.
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
