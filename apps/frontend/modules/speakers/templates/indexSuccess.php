<div class="row">
    <div class="column grid_12">
        <h2>Speakers &amp; Sessions</h2>
    </div>
</div>

<?php foreach ($speakers as $speaker):
//var_dump($speaker);
//die;

?>
<div class="row speakerRow">
    <div class="column grid_12 speakerRowTop">
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
            <img class="person" src="/images/speakers/<?php echo $speaker['img']; ?>">
    </div>
    <div class="column grid_4">
        <h4>Bio</h4>
        <?php echo $speaker['bio']; ?><br><br>
    </div>
    <div class="column grid_6">
    <?php foreach ($speaker['Talks'] as $talk): ?>
        <div class="row newsBG news">
            <div class="column innergrid_1 newsdate">
                <span class="day"><?php echo $talk['Programme']['day']; ?></span><br>
                <span class="month"><?php echo substr( $talk['Programme']['timestart'], 0, 5); ?></span>
            </div>
            <div class="column grid_5">
                <h4><?php echo $talk['title']; ?></h4>
                <?php echo $talk['abstract']; ?>
            </div>
        </div>
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