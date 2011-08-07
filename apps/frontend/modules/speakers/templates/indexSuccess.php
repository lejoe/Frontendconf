<div class="row">
    <div class="column grid_12">
        <h2>Speakers</h2>
    </div>
</div>
<div class="row">
    <div class="column grid_6">
        <div class="lead">
        We have some confirmed speakers, others will follow in the next days.
        <br><br>
        </div>
    </div>
    <div class="column grid_6">
        <a class="button" href="/tickets">Get an Early Bird Ticket</a>
    </div>
</div>
<div class="row">
    <div class="column grid_12 speakerRowBottom">
        &nbsp;
    </div>
</div>
<?php use_helper('Text') ?>
<?php foreach ($speakers as $speaker):?>
<div class="row speakerRow">
    <div class="column grid_12 speakerRowTop">
        <a name="id<?php echo $speaker['id'];?>"></a>
        <h3><?php echo $speaker['name'];?><span class="speakerData">
<?php
$twitter = $speaker['twitter'];
$profession = $speaker['profession'];
$website = $speaker['website'];
    if (!empty($twitter)) { ?>
            <a href="http://twitter.com/<?php echo $twitter;?>">@<?php echo $twitter;?></a>,
    <?php }
    if (!empty($profession)) {
                echo " " . $profession;?>,
    <?php }
    if (!empty($website)) { ?>
            <span><a href="<?php echo $website;?>"><?php echo $website;?></a>
    <?php } ?>
            </span></h3>
    </div>
</div>
<div class="row ">
    <div class="column grid_2">
            <img width="132" height="132" alt="<?php echo $speaker['name'];?>" class="person" src="/images/speakers/<?php echo $speaker['img']; ?>.jpg">
    </div>
    <div class="column grid_6">
        <h4>Bio</h4>
        <?php echo auto_link_text($speaker['bio']); ?><br><br>
    </div>
    <div class="column grid_4">
    <?php foreach ($speaker['Talks'] as $talk): ?>
        <h4><?php echo $talk['title']; ?></h4>
        <!--
        <span class="day"><?php echo $talk['Programme']['day']; ?></span><br>
        <span class="month"><?php echo substr( $talk['Programme']['timestart'], 0, 5); ?></span>-->

        <?php echo $talk['abstract']; ?>

    <?php endforeach; ?>
    </div>
</div>
<div class="row speakerRow">
    <div class="column grid_12 speakerRowBottom">
        &nbsp;
    </div>
</div>
<?php endforeach; ?>

<div class="row lastBeforeFooter">
    <div class="column grid_12">
        &nbsp;
    </div>
</div>