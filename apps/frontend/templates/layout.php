<!DOCTYPE HTML>
<html>
    <head>
        <?php include_stylesheets() ?>
        <link href="http://fonts.googleapis.com/css?family=Copse&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Anton&v1" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.png" />

    <?php include_javascripts() ?>
    </head>
    <body>
        <div id="topBar">
            <div class="row">
                <a id ="menuButton" href="#mobileNavigation" class="barButton">Menu</a>
                <div id="socialMediaLinks"></div>
            </div>
        </div>
        <div class="row" id="header">
            <div id="logoBox" class="column grid_3">
                <h1 class=""><a href="/">front /></a></h1>
                <div class="confName">Frontend Conference Zurich<br>
                September 9th & 10th 2011
                </div>
            </div>
            <div id="naviWide" class="column grid_9">
                <ul class="navigation">
                        <?php echo include_partial('home/navigationItems', array('myvar' => 12345)); ?>
                </ul>
            </div>
        </div>
    <?php echo $sf_content ?>
        <div class="row" id="naviMobile">
            <a name="mobileNavigation"></a>
            <div >

                <div class="decoDivider headroom">menu</div>
                <ul class="navigation">
                    <a class="naviItem" href="/"><li><span>Home </span><span class="next">></span></li></a>
                    <?php echo include_partial('home/navigationItems', array('myvar' => 12345)); ?>
                </ul>
            </div>
        </div>
        <div id="footer" >
            <div class="row">
                <div class="column grid_6 footerTop">
                    <br><br>
                </div>
                <div class="column grid_6">
                    Sponsors<br><br>
                </div>
            </div>
            <div class="row">
                <div class="column grid_3">
                    <br>
                    <ul id="footerNavigation">
                        <a class="naviItem" href="/"><li><span>Home </span><span class="next">></span></li></a>
                     <?php echo include_partial('home/navigationItems', array('myvar' => 12345)); ?>
                    </ul>
                </div>
                <div class="column grid_3">
                    <div id="footerSocialMedia">
                        <br>
                        <iframe src="http://www.facebook.com/plugins/like.php?app_id=155023517904442&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFrontend-Conference-Zurich%2F160697803997079&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:21px;" allowTransparency="true"></iframe>

                    <br><br>
                        <a href="http://twitter.com/frontendconfch" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-show-count="false">Follow @frontendconfch</a>
                        <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                    </div>
                </div>

                <div class="column grid_3">
                    <a href="http://liip.ch"><img src="/images/logo_liip.png" alt="Liip is a Silver Sponsor of the Zurich Frontend Conference"></a>
                </div>
                <div class="column grid_3">
                    <a href="http://liip.ch"><img src="/images/logo_acme.png" alt="ACME is a Silver Sponsor of the Zurich Frontend Conference"></a>
                </div>
            </div>

            <div class="row">
                <div class="column grid_6">
                    &nbsp;
                </div>
                <div class="column grid_6">
                    <br>
                        Become a Sponsor  <a href="/summary.pdf">Get the Sponsors Information Pack</a>
                </div>
            </div>
            <div class="row">
                <div class="column grid_12 footerEnd">
                    Frontend Conference Zurich
                </div>
            </div>
        </div>
    <!-- PUT JS HERE -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    </body>
</html>