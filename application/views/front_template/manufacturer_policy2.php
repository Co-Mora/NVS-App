<div class ="container">
    <div class ="row">
        <div class="box">
            <div class="box-1 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-organization-100.png'))?>
                <p>Manufacturer</p>
            </div>
            <div class="box-2 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-crowd-filled-100.png'))?>
                <p>From 6 to 10 Employees</p>
            </div>
            <div class="box-3 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-money-100.png'))?>
                <p>Start from RM 4K</p>
            </div>
        </div>
    </div>
</div>
<div class='container'>
    <table cellspacing='0'>
        <thead>
        <tr>
            <th>Policy</th>
            <th>Average Premium</th>
            <th>Popularity</th>
            <th><a href="#" class="btn-all">Select all</a></th>
        </tr>
        </thead>
        <tbody>
        <?php

        ?>
        <?php foreach ($manufacturer2 as $item): ?>
            <tr>
                <td><span><?php echo img(array('src'=>'assets/frontend/images/'.$item->image, 'class'=> 'img-responsive', 'width' =>'35',
                            'height' => '35')); ?></span><?php echo $item->policy_name ?></td>
                <td>RM<?php echo $item->policy_price ?></td>
                <td><?php echo $item->rate ?></td>
                <td><button type="submit" class="star-button"  id="forth-button"><i class="fa fa-star" aria-hidden="true"></i></button></td>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <div class="submit">
        <p><button type="submit" value="Submit" class="submit-button" id="good_job">Submit>></button></p>
    </div>
</div>