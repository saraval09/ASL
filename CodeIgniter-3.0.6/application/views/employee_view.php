<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title -->
    <title>Employee Directory</title>
    <!--Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/jquery/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-editable.min.js"></script>


    <!-- Links -->
    <link rel="stylesheet" href="/jquery/jquery-ui.min.css">
    <link rel="stylesheet" href="/jquery/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/jquery/jquery-ui.theme.min.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css.map" rel="stylesheet">
    <link href="/css/bootstrap-editable.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="/img/check.png"/>
    <style type="text/css">
        .colbox {
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>

    <script type="text/javascript">
        //load datepicker control onfocus
        $(function() {
            $("#hireddate").datepicker();
        });
    </script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <h1>Employee Directory</h1>
        </div>
        <div>

            <ul class="nav nav-pills pull-right" style="margin-top:30px">
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/login'">Logout</button></li>
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/user'">Signup</button></li>
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/deleteemployee'">Directory</button></li>
            </ul>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
            <legend>Add Employee Details</legend>
            <?php
            $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
            echo form_open("employee/index", $attributes);?>
            <fieldset>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-lg-4 col-sm-4">
                            <label for="employeeno" class="control-label">Employee No</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="employeeno" name="employeeno" placeholder="employeeno" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
                            <span class="text-danger"><?php echo form_error('employeeno'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="employeename" class="control-label">Employee Name</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="employeename" name="employeename" placeholder="employeename" type="text" class="form-control"  value="<?php echo set_value('employeename'); ?>" />
                            <span class="text-danger"><?php echo form_error('employeename'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="department" class="control-label">Department</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">

                            <?php
                            $attributes = 'class = "form-control" id = "department"';
                            echo form_dropdown('department',$department,set_value('department'),$attributes);?>
                            <span class="text-danger"><?php echo form_error('department'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="designation" class="control-label">Designation</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">

                            <?php
                            $attributes = 'class = "form-control" id = "designation"';
                            echo form_dropdown('designation',$designation, set_value('designation'), $attributes);?>

                            <span class="text-danger"><?php echo form_error('designation'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="hireddate" class="control-label">Hired Date</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="hireddate" name="hireddate" placeholder="hireddate" type="text" class="form-control"  value="<?php echo set_value('hireddate'); ?>" />
                            <span class="text-danger"><?php echo form_error('hireddate'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="salary" class="control-label">Salary</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="salary" name="salary" placeholder="salary" type="text" class="form-control" value="<?php echo set_value('salary'); ?>" />
                            <span class="text-danger"><?php echo form_error('salary'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                        <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                        <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</body>
</html>