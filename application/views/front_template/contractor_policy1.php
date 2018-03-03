<div class ="container">
<<<<<<< HEAD
                    <h2 style="text-align:center">Manage your Business Insurance</h2>

    <div class ="row">
        <div class="box col-sm-12 col-xs-12">
            <div class="box-1 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-organization-100.png'))?>
                <p>Contractors</p>
            </div>
            <div class="box-2 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-crowd-filled-100.png'))?>
                <p>From 1 to 5 Employees</p>
            </div>
            <div class="box-3 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-money-100.png'))?>
                <p>Affordable</p>
=======
    <div class ="row">
        <div class="box">
            <div class="box-1 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-organization-100.png'))?>
                <p>Contractors</p>
            </div>
            <div class="box-2 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-crowd-filled-100.png'))?>
                <p>From 1 to 5 Employees</p>
            </div>
            <div class="box-3 col-xs-4 col-md-4 col-lg-4">
                <?php echo img(array('src'=>'assets/frontend/images/icons8-money-100.png'))?>
                <p>Start from RM 4K</p>
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394
            </div>
        </div>
    </div>
</div>
<div class='container'>
<<<<<<< HEAD
        <h3 style="text-align:center">Get free quotes from multiple insurance carriers with Smcity</h3>

     <table  class="table">
        <thead>
        <tr>
            <th scope="row">Policy Name</th>
            <th scope="row"> Average Premium</th>
            <th ><a href="#" class="btn-all">Select all</a></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contractor1 as $item) : ?>
             <tr>
                 <td><?php echo img(array('src' => 'assets/frontend/images/' . $item->image, 'class' => 'img-responsive pull-left', 'width' => '35', 'height' => '35')); ?><?php echo $item->policy_name ?></td>
                 <td>RM<?php echo $item->policy_price ?></td>
                 <td><button type="submit" class="star-button"  id="forth-button"><i class="fa fa-check" aria-hidden="true"></i></button></td>

             </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
        <div class="submit">
            <p><a href="<?php echo base_url()?>re_view"><input type="submit" value="Submit" class="submit-button" id="good_job"></a></p>
        </div>

    </div>


<footer>

    <!-- footer copyright area -->
    <div class="copyright-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright@2018 <a href="http://www.sighttechnologies.co/" target="_blank">Sight Technologies</a> Inc. All Rights Reserved.</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- ./end copyright-wrapper -->
</footer>
=======
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

        <?php foreach ($contractor1 as $item): ?>
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
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394
