
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
            background: #05003D;
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

    <section id="topper" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSI+PGRlZnMgaWQ9ImRlZnM0Ij48ZmlsdGVyIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgaWQ9ImZpbHRlcjMxMTUiPjxmZVR1cmJ1bGVuY2UgdHlwZT0iZnJhY3RhbE5vaXNlIiBudW1PY3RhdmVzPSIxIiBiYXNlRnJlcXVlbmN5PSIwLjkiIGlkPSJmZVR1cmJ1bGVuY2UzMTE3Ii8+PGZlQ29sb3JNYXRyaXggcmVzdWx0PSJyZXN1bHQ1IiB2YWx1ZXM9IjEgMCAwIDAgMCAwIDEgMCAwIDAgMCAwIDEgMCAwIDAgMCAwIDYgLTQuMTUgIiBpZD0iZmVDb2xvck1hdHJpeDMxMTkiLz48ZmVDb21wb3NpdGUgaW4yPSJyZXN1bHQ1IiBvcGVyYXRvcj0iaW4iIGluPSJTb3VyY2VHcmFwaGljIiByZXN1bHQ9InJlc3VsdDYiIGlkPSJmZUNvbXBvc2l0ZTMxMjEiLz48ZmVNb3JwaG9sb2d5IGluPSJyZXN1bHQ2IiBvcGVyYXRvcj0iZGlsYXRlIiByYWRpdXM9IjMiIHJlc3VsdD0icmVzdWx0MyIgaWQ9ImZlTW9ycGhvbG9neTMxMjMiLz48L2ZpbHRlcj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgeD0iMCIgeT0iMCIgaWQ9InJlY3QyOTg1IiBmaWxsPSIjMDAwMDAwIi8+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgeD0iMCIgeT0iMCIgaWQ9InJlY3QyOTg1IiBzdHlsZT0iZmlsbDojMDA4NGZmO2ZpbHRlcjp1cmwoI2ZpbHRlcjMxMTUpIi8+PC9zdmc+');">
        <h1>Welcome to<br>Scotch Box <i class="fa fa-heart"></i></h1>
    </section>


    <article>
        <div class="container">
            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Installed Software</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>PHP Version</td>
                            <td>5.5.17-2+deb.sury.org~precise+1</td>
                        </tr>
                        <tr>
                            <td>MySQL is installed</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>MySQL is connected</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>MySQL Version</td>
                            <td>5.5.38-0ubuntu0.12.04.1</td>
                        </tr>
                                                <tr>
                            <td>Memcached running</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Memcached version</td>
                            <td>1.4.13</td>
                        </tr>

                        <tr>
                            <td>Ruby</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Composer</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>Laravel Installer</td>
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
                            <td>GD and Imagick</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>NPM</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

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

                    </table>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>PHP Modules</h2>
                    <table class="table table-responsive table-striped table-hover">
                                                <tr>
                            <td>Core</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>PDO</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>Phar</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>Reflection</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>SPL</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>SimpleXML</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>Zend OPcache</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>apache2handler</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>bcmath</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>bz2</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>calendar</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>ctype</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>curl</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>date</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>dba</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>dom</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>ereg</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>exif</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>fileinfo</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>filter</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>ftp</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>gd</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>gettext</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>hash</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>iconv</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>imagick</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>json</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>libxml</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mbstring</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mcrypt</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>memcache</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>memcached</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mhash</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mysql</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mysqli</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>mysqlnd</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>openssl</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>pcre</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>pdo_mysql</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>posix</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>session</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>shmop</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>soap</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>sockets</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>standard</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>sysvmsg</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>sysvsem</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>sysvshm</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>tokenizer</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>wddx</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>xml</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>xmlreader</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>xmlwriter</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>zip</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                                <tr>
                            <td>zlib</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                                            </table>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-6 col-md-offset-3 wrap">
                    <h2>Database Credentials</h2>
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
                    <h2>SSH Credentials</h2>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td>SSH Host</td>
                            <td>192.168.33.1</td>
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


    <!-- Styles -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>

    </script>

</body>
</html>
