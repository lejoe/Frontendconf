<a href="/speakers#id<?php echo $speaker['id'];?>"><?php echo $speaker['Talks'][0]['title'];?></a>

                <div class="row speakerEntry">
                    <div class="column innergrid_1">
                        <img width="52" height="52" class="person" alt="<?php echo $speaker['name'];?>" src="/images/speakers/thumb_<?php echo $speaker['img'];?>.jpg">
                    </div>
                    <div class="column grid_2">
                        <h4><?php echo $speaker['name'];?></h4>
                        <?php if (!empty($speaker['profession'])) {
                            //echo " " . $speaker['profession'];?>
                        <?php } ?>
                    </div>
                </div>