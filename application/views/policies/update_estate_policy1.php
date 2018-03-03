<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Policy</h3>

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    $attr = array(

                        'role' => 'form'
                    )
                    ?>
                    <?php if($this->session->flashdata('errors')): ?>

                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Failed</h4>
                            <?php echo $this->session->flashdata('errors');?>
                        </div>
                    <?php endif; ?>


                    <?php echo form_open('Policies/update_estate_policy1' .$this->uri->segment('3'),$attr)?>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_name',
                            'placeholder' => 'Enter Policy Name',
                            'value' => $get->policy_name
                        )
                        ?>
                        <?php echo form_label('Policy Name'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_price',
                            'placeholder' => 'Enter Policy Price',
                            'value' => $get->policy_price

                        )
                        ?>
                        <?php echo form_label('Policy Price'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_sum',
                            'placeholder' => 'Enter Sum Insured',
                            'value' => $get->sum_insured
                        )
                        ?>
                        <?php echo form_label('Sum Insured'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_rate',
                            'placeholder' => 'Enter Rate',
                            'value' => $get->rate

                        )
                        ?>
                        <?php echo form_label('Rate'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_perils3',
                            'placeholder' => 'Enter Perils Rate 1 To 3',
                            'value' => $get->perils_rate_1_3
                        )
                        ?>
                        <?php echo form_label('Perils Rate 1 To 3'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">

                        <?php

                        $data = array(
                            'class' => 'form-control',
                            'name' => 'policy_perils4',
                            'placeholder' => 'Enter Perils Rate 1 To 4',
                            'value' => $get->perils_rate_1_4
                        )
                        ?>
                        <?php echo form_label('Perils Rate 1 To 3'); ?>
                        <?php echo form_input($data) ?>
                    </div>
                    <div class="box-body">
                        <?php

                        $data = array(
                            'class' => 'btn btn-success',
                            'id' => 'exampleInputText',
                            'name' => 'created',
                            'placeholder' => 'Enter Perils Rate 1 To 4',
                            'value' => 'Update Policy'
                        )
                        ?>
                        <?php echo form_submit($data) ?>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </section>
</div>