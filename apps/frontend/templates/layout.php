<!DOCTYPE HTML>
<html>
    <head>
        <?php include_stylesheets() ?>
        <link href="http://fonts.googleapis.com/css?family=Copse&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans&v1" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Anton&v1" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">
        <style>
        </style>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.png" />

    <?php include_javascripts() ?>
    </head>
    <body>
        <div id="topBar">
            <div class="row">
                <div class="topBarButton">Menu</div>
                <div id="socialMediaLinks"></div>
            </div>
        </div>
        <div class="row">
            <div id="logoBox" class="column grid_3">
                <h1 class="">front /></h1>
                <div class="confName">Frontend Conference Zurich<br>
                September 9th & 10th 2011
                </div>
            </div>
            <div id="naviWide" class="column grid_9">
                <ul class="navigation">
                        <li><span><a class="naviItem">Speakers & Sessions  </a></span><span class="next">></span></li>
                        <li><span>Tickets </span><span class="next">></span></li>
                        <li><span>Venue </span><span class="next">></span></li>
                        <li><span>Sponsors </span><span class="next">></span></li>
                </ul>
            </div>
        </div>
    <?php echo $sf_content ?>
        <div class="row">
            <div id="naviMobile">
                <ul class="navigation">
                        <li><span><a class="naviItem">Speakers & Sessions  </a></span><span class="next">></span></li>
                        <li><span>Tickets </span><span class="next">></span></li>
                        <li><span>Venue </span><span class="next">></span></li>
                        <li class="last"><span>Sponsors </span><span class="next">></span></li>
                </ul>
            </div>
        </div>
        <div id="footer" >
            <div class="row">
                <span class="confName">Sponsors</span>
                    <br><br>
                <a href="http://liip.ch"><img src="images/logo_liip.png" alt="Liip is a Silver Sponsor of the Zurich Frontend Conference"></a>
                <br><br><br>
                <span class="confName"> Become a Sponsor</span><br><br>
                 <a href="summary.pdf">Download the sponsors information pack</a>
            </div>
        </div>
    <!-- PUT JS HERE -->
    </body>
</html>