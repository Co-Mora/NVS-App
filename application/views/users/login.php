

<div class="register-box">
    <div class="register-logo">
        <a href=""><b>Insurance</b>NVS</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Login membership</p>
        <?php if($this->session->flashdata('errors')): ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Failed</h4>
                <?php echo $this->session->flashdata('errors');?>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('failed')): ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Failed</h4>
                <?php echo $this->session->flashdata('failed');?>
            </div>
        <?php endif; ?>

        <?php echo form_open('Users/login', '') ?>
        <div class="form-group has-feedback">
            <?php

            $data = array(
                'class' => 'form-control',
                'placeholder' => 'Username',
                'name' => 'username',
                'value' => set_value('username')
            )

            ?>
            <?php echo form_input($data)?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php

            $data = array(
                'class' => 'form-control',
                'placeholder' => 'Password',
                'name' => 'password',

            )

            ?>
            <?php echo form_password($data)?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php

            $data = array(
                'class' => 'form-control',
                'placeholder' => 'Retype password',
                'name' => 'confirm_password'
            )

            ?>
            <?php echo form_password($data)?>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-4">
                <?php

                $data = array(
                    'class' => 'btn btn-primary btn-block btn-flat',
                    'placeholder' => 'Retype password',
                    'value' => 'Login'
                )

                ?>
                <?php echo form_submit($data)?>
            </div>
            <!-- /.col -->
        </div>
        </form>
        <a href="<?php echo base_url()?>register" class="text-center">I don't have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
