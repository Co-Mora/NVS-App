<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Customers Details
            <small>Customers Policy</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url()?>">Customers Details</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Customers Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
<<<<<<< HEAD
                                <th>Customer Id</th>
                                <th>Customer Name</th>
=======
                                <th>Customer Name</th>
                                <th>Customer Email</th>
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394
                                <th>Customer Phone</th>
                                <th>Industry Name</th>
                                <th>Number of Employees</th>
                                <th>Due Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($customers as $item):?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->customer_name; ?></td>
<<<<<<< HEAD
=======
                                    <td><?php echo $item->customer_email; ?></td>
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394
                                    <td><?php echo $item->customer_phone; ?></td>
                                    <td><?php echo $item->industry_name; ?></td>
                                    <td><?php echo $item->number_employees; ?></td>
                                    <td><?php echo $item->due_date; ?></td>
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