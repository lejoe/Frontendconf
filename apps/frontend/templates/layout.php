<!DOCTYPE HTML>
<html>
    <head>
        <?php include_stylesheets() ?>
        <link href="http://fonts.googleapis.com/css?family=Copse&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Anton&v1" rel="stylesheet" type="text/css"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.png" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" >

    <?php include_javascripts() ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-24147044-1']);
      _gaq.push(['_setDomainName', '.frontendconf.ch']);
      _gaq.push(['_trackPageview']);
    </script>
    </head>
    <body>
        <div id="topBar">
            <div class="row">
                <a id="menuButtonLink" href="#mobileNavigation"><div id ="menuButton" class="barButton">Menu</div></a>
                <div id="socialMediaLinks">
                    <a href="http://www.facebook.com/pages/Frontend-Conference-Zurich/160697803997079"><div class="socialMediaLinks smfb"></div></a>
                    <a href="http://twitter.com/frontendconfch"><div class="socialMediaLinks smtwitter"></div></a>
                </div>
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
                        <?php echo include_partial('home/navigationItems', array('active' => $this->getModuleName())); ?>
                </ul>
            </div>
        </div>
    <?php echo $sf_content ?>
        <div class="row" id="naviMobile">
            <div>
                <h5 id="mobileNavigation" name="mobileNavigation" class="decoDivider headroom">menu</h5>
                <ul class="navigation">
                    <li><a class="naviItem" href="/"><span>Home </span><span class="next">></span></a></li>
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
                    Platinum Sponsors:<br><br>
                </div>
            </div>
            <div class="row">
                <div class="column grid_3">
                    <br>
                    <ul id="footerNavigation">
                        <li><a class="naviItem" href="/"><span>Home </span><span class="next">></span></a></li>
                     <?php echo include_partial('home/navigationItems', array('myvar' => 12345)); ?>
                        <li><a class="naviItem" href="/about/"><span>About</span><span class="next">></span></a></li>
                    </ul>
                </div>
                <div class="column grid_3">
                    <div id="footerSocialMedia">
                        <br>
                        <?php if ($agent['type'] == "desktop"){ ?>
                        <iframe src="http://www.facebook.com/plugins/like.php?app_id=155023517904442&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFrontend-Conference-Zurich%2F160697803997079&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" allowTransparency="true" class="facebook"></iframe>
                        <br><br>
                        <a href="http://twitter.com/frontendconfch" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-show-count="false">Follow @frontendconfch</a>
                        <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                        <?php } ?>
                    </div>
                </div>

                <div class="column grid_3">
                    <a href="/sponsoring"><img width="220" height="100" src="/images/sponsors/netcetera.gif" alt="Netcetera is one of our two Platinum Sponsors"></a><br><br>
                </div>
                <div class="column grid_3">
                    <a href="/sponsoring"><img width="220" height="100" src="/images/sponsors/unic.gif" alt="Unic is one of our two Platinum Sponsors"></a>
                </div>
            </div>

            <div class="row">
                <div class="column grid_6">
                    &nbsp;
                </div>
                <div class="column grid_6">
                    <br>
                        <a href="/sponsoring">Become a Sponsor</a>
                </div>
            </div>
            <div class="row">
                <div class="column grid_12 footerEnd">
                    © 2011 Frontend Conference Zurich
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#menuButton').click(function() {
                    var elementClicked = $(this).attr("href");
                    var destination = $(elementClicked).offset().top;
                    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination-20}, 500 );
                    return false;
                 });
            });
        </script>
        <script type="text/javascript">  (function() {
         var ga = document.createElement('script');     ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:'   == document.location.protocol ? 'https://ssl'   : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
        </script>
    </body>
</html>