<header class="header-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php if($this->session->flashdata('not_selected')): ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <?php echo $this->session->flashdata('not_selected')?>
                    </div>
                <?php endif; ?>
                <?php if($this->session->flashdata('errors')): ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <?php echo $this->session->flashdata('errors')?>
                    </div>
                <?php endif; ?>

                <?php

                $attr = array(

                    'id' => 'contact',
                )

                ?>
                <?php echo form_open('view', $attr); ?>
                <fieldset>
                    <?php
                    $data = array(
                        'name' => 'username',
                        'placeholder' => 'Your Name',
                    )
                    ?>
                    <?php echo form_input($data);?>
                </fieldset>
                <fieldset>
                    <?php

                    $data = array(
                        'username' => 'email',
                        'placeholder' => 'Your Email Address',
                    )
                    ?>
                    <?php echo form_input($data);?>
                </fieldset>
                <fieldset>
                    <?php

                    $data = array(
                        'name' => 'phone',
                        'placeholder' => 'Your Phone Number',
                    )
                    ?>
                    <?php echo form_input($data);?>
                </fieldset>
                <?php
                $class = array (
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
                <?php echo form_dropdown('industries',$options, 'data-display', $class, 'required="required"');?>
                <?php
                $class = array (

                    'class' => 'wide'

                );
                $option1 = array(

                    'data-display' => 'Select Number of Employees',
                    'one_to_five' => '1 TO 5 Employees',
                    'six_to_ten' => '6 TO 10 Employees',
                )
                ?>
                <?php echo form_dropdown('numbers',$option1, 'data-display', $class, 'required="required"');?>
                <fieldset>
                    <?php

                    $data = array(
                        'name' =>'submit',
                        'type' => 'submit',
                        'value' => 'Get quote>>',
                        'id' => 'contact-submit',
                        'data-submit' => '...Sending',
                    )
                    ?>
                    <?php echo form_submit($data);?>
                </fieldset>
                <?php echo form_close();?>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="typography">
                    <h1>Commercial Insurance for your Business.<br>
                        Manage your Business Insurance.</h1>
                    <p>Everything you need to keep your company and employees protected.</p>
                </div>
            </div>
        </div>
    </div>
</header>
