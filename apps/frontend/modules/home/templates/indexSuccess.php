        <div class="row">
            <div class="column grid_8" id="mainclaim">
                <h2 class="mainclaim">Two days of inspiring talks on frontend and UX technologies.</h2>
            </div>
            <div class="column grid_4">
                <img src="images/zh.png" id="imgZH" alt="An image of the Grossmünster Church in Zurich">
                    <br>
            </div>
        </div>
        <div class="row lastBeforeFooter">
            <div class="column grid_6">

                <!-- Speakers -->

                <div class="row">
                    <div class="column grid_6">
                        <h3 class="front">Speakers</h3>
                    </div>
                </div>
<?php foreach ($speakers as $speaker):?>
                <div class="row speakerEntry">
                    <div class="column innergrid_1">
                        <img class="person" src="/images/speakers/thumb_<?php echo $speaker['img'];?>">
                    </div>
                    <div class="column grid_5">
                        <h4><?php echo $speaker['name'];?></h4>
                        <?php echo $speaker['bio'];?>
                    </div>
                </div>
<?php endforeach; ?>

                <div class="row">
                    <div class="column grid_6">
                        <h3 class="close">&lt;speakers/></h3>
                    </div>
                </div>
            </div>
            <div class="column grid_6">
                <a class="button" href="/propose">Propose a Talk</a>
                <br><br>

                <!-- news -->

                <div class="row">
                    <div class="column grid_6">
                        <h3 class="news">News</h3>
                    </div>
                </div>
                <div class="row newsBG news">
                    <div class="column innergrid_1 newsdate">
                        <span class="day">25</span><br>
                        <span class="month">Jun</span>

                    </div>
                    <div class="column grid_5">
                        <h4>Site online</h4>
                        Finally our site went online - you can now sumbit proposals and have a peek at the speakers already confirmed.
                    </div>
                </div>
                <div class="row newsBG news">
                    <div class="column innergrid_1 newsdate">
                        <span class="day">22</span><br>
                        <span class="month">Jun</span>

                    </div>
                    <div class="column grid_5">
                        <h4>Frontend Conference Zurich </h4>
                        The first Frontend Conference Zürich has been announced. Yay!
                    </div>
                </div>
                <div class="row">
                    <div class="column grid_6">
                        <h3 class="news newsClose">&lt;news/></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="column grid_6">
                        <br><br>
                        <h3 class="front">Twitter</h3>


                        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                        <script>
                            new TWTR.Widget({
                            version: 2,
                            type: 'profile',
                            rpp: 4,
                            interval: 6000,
                            width: 'auto',
                            height: 200,
                            theme: {
                            shell: {
                              background: 'none',
                              color: '#ffffff'
                            },
                            tweets: {
                              background: 'none',
                              color: '#49422f',
                              links: '#0e3861'
                            }
                            },
                            features: {
                            scrollbar: false,
                            loop: false,
                            live: false,
                            hashtags: true,
                            timestamp: true,
                            avatars: false,
                            behavior: 'all'
                            }
                            }).render().setUser('frontendconfch').start();
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="column grid_6">
                        <h3 class="close">&lt;twitter/></h3>
                    </div>
                </div>

            </div>
        </div>
