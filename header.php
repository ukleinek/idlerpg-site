<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
  <head>
    <title><?php echo $irpg_chan;?> Idle RPG: <?php echo $irpg_page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $BASEURL;?>css/bootstrap.min.css" media="screen">
    <link href="<?php echo $BASEURL;?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <style type="text/css">
        <!-- Global Styles -->
        <!--body {
            padding-top: 60px;
            padding-bottom: 40px;
        }-->
        .container {
            padding-top: 60px;
        }
        <!-- responsive stuff -->
        @media (max-width: 980px) {
        /* Enable use of floated navbar text */
            .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
            }
        }
        <?php 
        if ($BASEURL . 'index.php' ==  $_SERVER['PHP_SELF']) {
            echo "        <!-- index styles -->\n";
            echo "        table.uniques {\n";
            echo "          border: 1px solid #c0c0c0;\n";
            echo "          padding: 5px;\n";
            echo "          text-align: left;\n";
            echo "        }\n";
            echo "        table.uniques td {\n";
            echo "          padding-left: 10px;\n";
            echo "        }\n";
            echo "        table.penalty {\n";
            echo "        border: 1px solid #c0c0c0;\n";
            echo "        padding: 5px;\n";
            echo "        text-align: left;\n";
            echo "        }\n";
            echo "        table.penalty th {\n";
            echo "            text-align: right;\n";
            echo "        }\n";
        }
        ?>
        <?php
        if (($BASEURL . 'playerview.php' || $BASEURL . 'players.php') ==  $_SERVER['PHP_SELF']) {
            echo "        <!-- player page -->\n";
            echo "        li.online { font-weight: bold; }\n";
            echo "        li.offline { color: #c0c0c0; }\n";
            echo "        a.offline { color: #707070; }\n";
            echo "        #map {\n";
            echo "          width: 500px;\n";
            echo "          height: 500px;\n";
            echo "          background-image: url(newmap.png);\n";
            echo "        }\n";
            echo "        table.forum {\n";
            echo "            border: 1px solid #c0c0c0;\n";
            echo "            table-layout: fixed;\n";
            echo "            overflow: auto;\n";
            echo "        }\n";
            echo "        table.forum td,tr,caption,thead,tfoot,th {\n";
            echo "            padding-left: 10px;\n";
            echo "            padding-right: 10px;\n";
            echo "        }\n";
            echo "        .tdblue { background-color: #ffffdf; }\n";
            echo "        .tdgray { background-color: #eeeee0; }\n";
            echo "        .tdred {\n";
            echo "            border: 1px solid red;\n";
            echo "            background-color: #FFCCCC;\n";
            echo "        }\n";
            echo "        .smallest {\n";
            echo "            font-size: 11px;\n";
            echo "        }\n";
        }
        ?>
    </style>
  </head>
  <body>
<?php
if ($enable_analytics == True) {
echo "  <script type="text/javascript">\n";
echo "  var _gaq = _gaq || [];\n";
echo "  _gaq.push(['_setAccount', 'UA-41765357-1']);\n";
echo "  _gaq.push(['_trackPageview']);\n";
echo "  (function() {\n";
echo "    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
echo "    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
echo "    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
echo "  })();\n";
echo "  </script>\n";
}
?>
    <!-- Idle RPG Logo -->
    
        
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo $BASEURL;?>"><?php echo $net_name;?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li<?php if ($BASEURL . 'index.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>">Game Info</a></li>
              <li<?php if ($BASEURL . 'players.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>players.php">Player Info</a></li>
              <li<?php if ($BASEURL . 'contact.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>contact.php">Contact</a></li>
              <li<?php if ($BASEURL . 'worldmap.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>worldmap.php">World Map</a></li>
              <li<?php if ($BASEURL . 'quest.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>quest.php">Quest Info</a></li>
              <!--<li<?php if ($BASEURL . 'thanks.php' == $_SERVER['PHP_SELF']) { echo " class=active";}?>><a href="<?php echo $BASEURL;?>thanks.php">Thanks</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">