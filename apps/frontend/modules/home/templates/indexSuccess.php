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
                        <h3 class="front">&lt;speakers></h3>
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
                        <h3 class="news">&lt;news></h3>
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

            </div>
        </div>
