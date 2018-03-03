<header>
    <!-- start top bar -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 hidden-xs">
                    <div class="contact">
                        <p>
                            <i class="fa fa-phone"></i>

                            +60122131797
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="#">sharianraj@nvs99.com

                            </a>
                        </p>
                    </div><!-- /.contact -->
                </div><!-- /.col-sm-8 -->

                <div class="col-sm-4">
                    <div class="social-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/Nvsinsurance/" target="_blank"><i class="fa fa-facebook"></i></a></li>

                        </ul>
                    </div><!-- /.social-icon -->
                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- end top bar -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <!-- Start Top Search -->

        <!-- End Top Search -->

        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <?php echo img(array('src' => 'assets/frontend/images/logo.png', 'width' => '130', 'height' => '130', 'class' => ''))?>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="" data-out="">
                    <li><a href="#features">Features</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
</header> <!-- end header -->


<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
<section class="">

    <!-- slide item one -->
    <div class="homepage-slider slider-bg1">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="slider-content">
                                <h1> Business Insurance solutions specific to your industry & company</h1>
                                <a href="#about">More About Us<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-right forms">
                            <?php if ($this->session->flashdata('not_selected')) : ?>
                                <div class="alert col-md-6 col-xs-12 col-sm-12 pull-left">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    <?php echo $this->session->flashdata('not_selected') ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->session->flashdata('errors')) : ?>
                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    <?php echo $this->session->flashdata('errors') ?>
                                </div>
                            <?php endif; ?>

                            <?php

                            $attr = array(

                                'id' => 'contact',
                                'class' => ''
                            )

                            ?>
                            <?php echo form_open('view',$attr); ?>
                            <fieldset>
                                <?php
                                $data = array(
                                    'name' => 'username',
                                    'placeholder' => 'Your Name',
                                )
                                ?>
                                <?php echo form_input($data); ?>
                            </fieldset>
                            <fieldset>
                                <?php

                                $data = array(
                                    'username' => 'email',
                                    'placeholder' => 'Your Email Address',
                                )
                                ?>
                                <?php echo form_input($data); ?>
                            </fieldset>
                            <fieldset>
                                <?php

                                $data = array(
                                    'name' => 'phone',
                                    'placeholder' => 'Your Phone Number',
                                )
                                ?>
                                <?php echo form_input($data); ?>
                            </fieldset>
                            <?php
                            $class = array(
                                'class' => 'wide'
                            );
                            $options = array(

                                'data-display' => 'Select Your Industry',
                                'admin' => 'Administrative Service',
                                'food' => 'Food And Accommodation',
                                'retail' => 'Retail',
                                'real_estate' => 'Real Estate',
                                'contractor' => 'Contractors',
                                'event' => 'Event Management Industry',
                                'manufacturer' => 'Manufacturers'
                            )
                            ?>
                            <?php echo form_dropdown('industries', $options, 'data-display', $class, 'required="required"'); ?>
                            <?php
                            $class = array(

                                'class' => 'wide'

                            );
                            $option1 = array(

                                'data-display' => 'Select Number of Employees',
                                'one_to_five' => '1 TO 5 Employees',
                                'six_to_ten' => '6 TO 10 Employees',
                            )
                            ?>
                            <?php echo form_dropdown('numbers', $option1, 'data-display', $class, 'required="required"'); ?>
                            <fieldset>
                                <?php

                                $data = array(
                                    'name' => 'submit',
                                    'type' => 'submit',
                                    'value' => 'Get Quote',
                                    'id' => 'contact-submit',
                                    'data-submit' => '...Sending',
                                )
                                ?>
                                <?php echo form_submit($data); ?>
                            </fieldset>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- slider area end -->

    <!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
    <section class="section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block-text">
                        <h2>Need free assistance on your company insurance Policy?</h2>
                        <p>With our software, you will be able to find out the relevant insurance policy for your company industry with a few clicks.</p>

                        <p>You will be able to find out the popularity of the policy, average premium and propose for a customized quote. The average premium is deduced from the quote of the top 5 general insurance companies in Malaysia and updated every one week.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block-img">
                        <?php echo img(array('src' => 'assets/frontend/images/homepageblock.jpg'))?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- block area end -->


    <!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
    <section class="section-padding darker-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <div class="template-title text-center">
                        <h2>We Provide Huge Range of Insurances</h2>
                        <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/1.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Administrative Services</h3>
                        <p>We provide tailor made specific policies for the administrative industry such as consultant office,
                            travel agent office &amp; Multi-Level marketing offices for a start.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/2.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Retail</h3>
                        <p>Through our association with insurance companies, we provide a comprehensive yet affordable
                            insurance policy for the retail industry. Retail Industry comprises of restaurant, flower shops,
                            sundry shops &amp; etc.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/3.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Real Estate</h3>
                        <p>We provide insurance for the real estate industry. Coverages from condominiums, office
                            buildings, to house buildings can be covered with tailor made policies specific to their risk
                            appetite.</p>
                    </div>
                </div>

                </div>
            <div class="row">
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/4.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Food And Accommodation</h3>
                        <p>Through our association with insurance companies, we provide a comprehensive yet affordable
                            insurance policy for the retail industry. Retail Industry comprises of restaurant, flower shops,
                            sundry shops &amp; etc.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/5.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Contractors</h3>
                        <p>We provide contractors insurance to cover the construction period of the project as specified in
                            the letter of award. Our insurance considers the various risks faced by contractors and propose a
                            holistic plan. Moreover, we also provide insurance solutions for financing of contractors during
                            the project period.</p>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php echo img(array('src' => 'assets/frontend/images/services/6.png', 'class' => 'hvr-buzz-out'))?>
                        <h3>Manufacturer</h3>
                        <p>Through our association with insurance companies, we provide a comprehensive solutions for
                            company who manufactures product be it either for foods, furniture, steel or waste solutions.</p>
                    </div>
            </div>
        </div>
    </section><!-- end services section -->


    <!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
    <section class="client-logo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                    <div class="">
                        <?php echo img(array('src' => 'assets/frontend/images/cling-logo/1.jpg', 'class' => 'hvr-buzz-out'))?>
                    </div>

                </div><!-- /.col-md-12 -->
                <div class="col-md-6 pull-right">
                    <h3>Hurry now, what you waiting for?<br> Get free quotes from multiple insurance carriers from us at NVS ASSURANCE </h3>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- end client section -->


    <!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
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
    <!-- preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
