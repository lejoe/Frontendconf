<div class="row">
    <div class="column grid_12">
        <h2>Speakers &amp; Sessions</h2>


    </div>
</div>
<div class="row lastBeforeFooter">
    <div class="column grid_6">
        <?php foreach ($speakers as $speaker): ?>
            <?php echo $speaker->getName() ?><br>
        <?php endforeach; ?>
    </div>
    <div class="column grid_6">

    </div>
</div>
