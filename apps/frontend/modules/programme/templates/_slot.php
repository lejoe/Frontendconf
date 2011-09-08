

                <div class="row speakerEntry">
                    <div class="topic"><?php echo $speaker['Talks'][0]['topic'];?>: </div>
                    <a href="/speakers#id<?php echo $speaker['id'];?>"><?php echo $speaker['Talks'][0]['title'];?></a>
                    
                    <?php if (!empty($speaker['img'])) {?>
                      <div class="column innergrid_1">
                        <img width="52" height="52" class="person" alt="<?php echo $speaker['name'];?>" src="/images/speakers/thumb_<?php echo $speaker['img'];?>.jpg">
                        <h4 class="name"><?php echo $speaker['name'];?></h4>
                      </div>
                    <?php } ?>
                    
                </div>