<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">
        <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2297835-1");
pageTracker._trackPageview();
} catch(err) {}</script>

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
                background-color: #dbcdb2;
                font-family: georgia, Times New Roman, serif;
                padding-left: 50%;
                margin-left: -340px;
                font-size: 100%;
                line-height: 1.6;

            }
            #container {
                background-color: #dbcdb2;
                padding: 20px;
                width: 680px;
            }
            #topBar {
                display: none;
            }
            h1 {
                width: 100%;
                font-size: 2em;
                color: #0f3961;
                text-align: center;
                border-bottom: 0px dotted #846837;
            }
            h2 {
                color: #de9f02;
                padding-bottom: 0;
                margin-bottom: 0;
                font-family: impact;
                text-transform: uppercase;
                font-weight: normal;
                letter-spacing:0.1em;
                line-height: 1.2em;
                font-size: 1.4em;
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

            .button {
                border: 1px solid #4E7D0E;
                border-radius: 5px;
                width: 150px;
                display: inline-block;
                outline: none;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                color: #fff;
                font-size: 12px;
                font-weight: bold;
                padding: 7px 0;
                background: #000;
                background-image:
                    -webkit-gradient(
                        linear,
                        left top,
                        left bottom,
                        color-stop(0.00, #7DB72F),
                        color-stop(100%, #4E7D0E)
                    );
                background-image: -moz-linear-gradient(center top , #7DB72F, #4E7D0E);
            }
            .navigation {
                list-style-type: none;
            }


            @media screen and (orientation: portrait) and (max-width: 480px){
                #container {
                    width: 280px;
                    padding:0px;
                }
                .content {
                    width: 260px;
                    padding: 0 10px;
                }
                #topBar {
                    display: block;
                    background-color: #0f3961;
                    height: 44px;
                    color: #ccc;
                }

                .topBarButton {
                    display: inline;
                    line-height: 44px;
                    padding: 8px 8px;
                    margin: 0 0 0 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
                body {
                    margin-left: -150px;
                    background-color: #fff;
                }
                .button {
                    width: 100%;
                    height:44px;
                }

                .navigation li {
                    width: 100%;
                    height: 44px;
                    vertical-align: middle;
                    line-height: 44px;
                    border-top: 1px solid #dfc9a0;
                    background-image:
                        -webkit-gradient(
                            linear,
                            left top,
                            left bottom,
                            color-stop(0.00, #dbcdb2),
                            color-stop(100%, #dfc9a0)
                        );
                    background-image: -moz-linear-gradient(center top , #7DB72F, #4E7D0E);
                }
                .navigation li span {
                    margin: 0 10px;
                }
                .navigation li span.next {
                    float: right;
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
    <div id="container">
        <div id="topBar">
            <div class="topBarButton">Menu</div>
        </div>
    <?php echo $sf_content ?>
    </div>
  </body>
</html>
