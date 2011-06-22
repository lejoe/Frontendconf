<!DOCTYPE HTML>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Copse&v1' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans&v1' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">

        <style>
        /* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}


            body {
                background-color: #e1d7bc;
                background-image: url(/images/bodyBG.png);
                font-family: Copse, Georgia, serif;
                font-size: 93.75%;
                line-height: 112.5%;

            }
            #container {
                padding: 20px;
                width: 680px;
            }
            #topBar {
                display:block;
                height: 28px;
                background-color: #0f3961;
                width: 100%;
            }

            #socialMediaLinks {
                    height: 19px;
                    width: 69px;
                    margin-right:10px;
                    float: right;
                    margin-top: 12px;
                    background: url(/images/social-media-icons.png) no-repeat;
                }

            #footer {
                background-color: #2b261c;
                color: #ccc;
                opacity: 0.75;
                display: block;
                width: 100%;
            }
            h1 {
                width: 100%;
                font-size: 362.5%;
                color: #0e3861;
                line-height: 100%;
                font-family: 'Copse', arial, serif;
                font-weight: normal;
            }
            h2 {
                color: #d69900;
                padding-bottom: 0;
                margin-bottom: 0;
                font-family: impact;
                text-transform: uppercase;
                font-weight: normal;
                letter-spacing:0.05em;
                line-height: 1.2em;
                font-size: 25px;
            }
            .confName {
                font-family: 'Droid Sans', Arial, sans-serif;
                text-transform: uppercase;
                text-align: center;
                font-size: 12px;
                line-height: 15px;
                color: #6b6d6b;
            }
            .smallDiv {
                width:100%;
                text-align:center;
                border-bottom: 1px dotted #846837;
                border-top: 1px dotted #846837;
                padding: 8px 0;
            }
            #logo {
                text-align:center;
            }

            a.button {
                border: 1px solid #2e3441;
                border-radius: 10px;
                width: 150px;
                display: inline-block;
                outline: none;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                color: #e1d7bc;
                font-size: 24px;
                font-weight: normal;
                padding: 7px 0;
                background: #000;
                background-image:
                    -webkit-gradient(
                        linear,
                        left top,
                        left bottom,
                        color-stop(0.00, #364f5d),
                        color-stop(100%, #071941)
                    );
                background-image: -moz-linear-gradient(center top , #364f5d, #2e3441);
            }
            .navigation {
                list-style-type: none;
                text-transform: uppercase;
                color: #233248;
                font-family: 'Droid Sans', Arial, sans-serif;
                font-size: 93.75%;
                font-weight: bold;
            }
            .navigation li {
                float: left;
                margin-right: 24px;
            }
            .navigation{
                border-top: 2px solid #c7bea6;
                border-bottom: 2px solid #c7bea6;
                line-height: 45px;
                vertical-align: middle;
                overflow: auto;
            }
            .navigation li span.next {
                    display: none;
                }

            .naviItem:hover{
                color: #c28b00;
            }

            fieldset {
                margin: 12px 4px;
                padding: 4px 12px;
                border:1px dotted #000;
            }

            @media screen and (orientation: portrait) and (max-width: 480px){
                #container {
                    margin-top: 54px;
                }
                #container, .centered {
                    width: 320px;
                    padding-left: 50%;
                    margin-left: -160px;
                }
                .content {
                    width: 100%;
                    padding: 0 ;
                }
                #topBar {
                    height: 44px;
                    color: #ccc;
                    position: fixed;
                    top: 0;
                    z-index:100;
                }

                .topBarButton {
                    font-family: 'Droid Sans', Arial, sans-serif;
                    text-transform: uppercase;
                    font-weight: bold;
                    font-size: 12px;
                    color: #233248;
                    display: inline;
                    line-height: 44px;
                    padding: 8px 8px;
                    margin: 0 0 0 10px;
                    border: 0;
                    border-radius: 4px;
                    background-image:
                    -webkit-gradient(
                        linear,
                        left top,
                        left bottom,
                        color-stop(0.00, #dfd4b9),
                        color-stop(100%, #c4b289)
                    );
                background-image: -moz-linear-gradient(center top , #364f5d, #2e3441);
                }
                a.button {
                    width: 100%;
                    height:44px;
                    padding: 0;
                    margin 0;
                    vertical-align: middle;
                    line-height:44px;
                }
                .navigation {
                    border-top: none;

                }
                .navigation li {
                    float: none;
                    width: 100%;
                    height: 44px;
                    vertical-align: middle;
                    line-height: 44px;
                    border-top: 2px solid #c7bea6;

                }
                .navigation li span {
                    margin: 0 10px;
                }
                .navigation li span.next {
                    float: right;
                    display: inline;
                }
            }
        </style>

    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="topBar">
            <div class="topBarButton">Menu</div>
            <div id="socialMediaLinks"></div>
    </div>
    <div id="container">

        <header>
            <h1>front /></h1>
                <span class="confName">Frontend Conference Zurich<br>
                September 9th & 10th 2011</span>
        </header>
    <?php echo $sf_content ?>
    </div>
    <div id="footer">
        <div class="centered">
            &lt;sponsors&gt;
            <br>
            <img src="/images/logo_liip.png"><br>
            &lt;sponsors/&gt;
        </div>
    </div>
  </body>
</html>