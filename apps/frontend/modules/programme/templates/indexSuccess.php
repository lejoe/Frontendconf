<div class="row">
    <div class="column grid_12">
        <h2>Programme</h2>
    </div>
</div>
<div class="row">
    <div class="column grid_6 secondNavigation">
        <a class="active" href="/programme">Friday</a>
        <a href="/programme/saturday">Saturday</a>
        <br><br>
    </div>
    <div class="column grid_6">
        <a class="button" href="/tickets">Get Your Ticket</a>
    </div>
</div>


<div id="programme">
    <div class="row head">
        <div class="column grid_2">
            &nbsp;
        </div>
        <div class="column grid_3 ">
            <h3>Design & UX Track</h3>
        </div>

        <div class="column grid_3 ">
            <h3>Javascript Track</h3>
        </div>

        <div class="column grid_3 ">
            <h3>Web Standard Track</h3>
        </div>

    </div>
    <div class="row">
        <div class="column grid_2">
            8.30 - 9.30
        </div>
        <div class="column grid_10">
            Registration
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            9.30 - 10.00
        </div>
        <div class="column grid_10">
            Conference Opening
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            10.00 - 11.00
        </div>
        <div class="column grid_3">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[0])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[1])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[2])); ?>
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            11.00 - 12.00
        </div>
        <div class="column grid_3">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[3])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[4])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[5])); ?>
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            12.00 - 13.30
        </div>
        <div class="column grid_10">
            Lunch
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            13.30 - 14.30
        </div>
        <div class="column grid_3">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[6])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[7])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[8])); ?>
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
           14.30 - 15.30
        </div>
        <div class="column grid_3">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[9])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[10])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[11])); ?>
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            15.30 - 16.00
        </div>
        <div class="column grid_10">
            Coffee Break
        </div>
    </div>

    <div class="row">
        <div class="column grid_2">
            16.00 -17.00
        </div>
        <div class="column grid_3">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[12])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[13])); ?>
        </div>
        <div class="column grid_3 ">
            <?php echo include_partial('programme/slot', array('speaker' => $slots[14])); ?>
        </div>
    </div>
</div>









<div class="row">
    <div class="column grid_12 speakerRowBottom">
        &nbsp;
    </div>
</div>
<?php use_helper('Text') ?>
