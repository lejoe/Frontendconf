<?php use_helper('Text') ?>
        <div class="row">
            <div class="column grid_8" id="mainclaim">
                <h2 class="mainclaim">Two days of inspiring talks on frontend and UX technologies.</h2>
            </div>
            <div class="column grid_4">
                <img width="285" height="241" src="images/zh.gif" id="imgZH" alt="An image of Sculpture of a Lion">
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
                        <img width="52" height="52" class="person" alt="<?php echo $speaker['name'];?>" src="/images/speakers/thumb_<?php echo $speaker['img'];?>.jpg">
                    </div>
                    <div class="column grid_5">
                        <h4><a href="/speakers#id<?php echo $speaker['id'];?>"><?php echo $speaker['name'];?></a></h4>
                        <?php echo auto_link_text($speaker['bio']);?>
                    </div>
                </div>
<?php endforeach; ?>

                <div class="row">
                    <div class="column grid_6">
                        <h3 class="close"><a href="/speakers">&lt;speakers/></a></h3>
                    </div>
                </div>
            </div>
            <div class="column grid_6">
                <a class="button" href="/tickets">Get Your Ticket</a>
                <br><br>

                <!-- news -->

                <div class="row">
                    <div class="column grid_6">
                        <h3 class="news">News</h3>
                    </div>
                </div>
                <?php foreach  ($news as $new):?>
                <div class="row newsBG news">
                    <div class="column innergrid_1 newsdate">
                        <span class="day"><?php echo date('d',strtotime($new['date']));?></span><br>
                        <span class="month"><?php echo date('M',strtotime($new['date']));?></span>

                    </div>
                    <div class="column grid_5">
                        <h4><?php echo $new['title'];?> </h4>
                        <?php echo $new['news'];?>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="row">
                    <div class="column grid_6">
                        <h3 class="news newsClose">&lt;news/></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="column grid_6">
                        <?php if($agent['type'] == "desktop")  {?>
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
                        <h3 class="close"><a href="http://twitter.com/frontendconfch">&lt;twitter/></a></h3>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
