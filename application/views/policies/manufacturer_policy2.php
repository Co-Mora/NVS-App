<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manufacturer
            <small>Manufacturer Policy</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url()?>industries">Industries</a></li>
            <li class=""><a href="<?php echo base_url()?>manufacturer">Manufacturer</a></li>
            <li class="active">Policies</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Smart Plan One</h3>
                        <a href="<?php echo base_url()?>create_manufacturer_policy2" class="btn btn-info pull-right">Add Policy</a>
                    </div>
                    <!-- /.box-header -->
                    <?php if($this->session->flashdata('updated')): ?>

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Alert</h4>
                            <?php echo $this->session->flashdata('updated');?>
                        </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('deleted')): ?>

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Alert</h4>
                            <?php echo $this->session->flashdata('deleted');?>
                        </div>
                    <?php endif; ?>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Policy Name</th>
                                <th>Policy Price</th>
                                <th>Sum Insured</th>
                                <th>Rate</th>
                                <th>Perils Rate 1 To 3</th>
                                <th>Perils Rate 1 To 4</th>
                                <th>Update Policy</th>
                                <th>Delete Policy</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($get_manufacturer2 as $item):?>
                                <tr>
                                    <td><?php echo $item->policy_name; ?></td>
                                    <td><span>RM </span><?php echo $item->policy_price; ?></td>
                                    <td><span>RM </span><?php echo $item->sum_insured; ?></td>
                                    <td><?php echo $item->rate; ?></td>
                                    <td><?php echo $item->perils_rate_1_3; ?></td>
                                    <td><?php echo $item->perils_rate_1_4; ?></td>
                                    <td><a href='<?php echo base_url();?>Policies/update_manufacturer_policy2/<?php echo $item->id?>' class='label label-success'>Update</a></td>
                                    <td><a href='<?php echo base_url();?>Policies/delete_manufacturer_policy2/<?php echo $item->id?>' class='label label-danger'>Delete</a></td>


                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>