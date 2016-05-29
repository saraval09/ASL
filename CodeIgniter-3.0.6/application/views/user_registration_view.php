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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css.map" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/jquery/jquery-ui.min.css">
    <link rel="stylesheet" href="/jquery/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/jquery/jquery-ui.theme.min.css">
    <link href="/css/bootstrap-editable.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="/img/check.png"/>
    <style type="text/css">
        .colbox {
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <h1>Employee Directory</h1>
        </div>
        <div>

            <ul class="nav nav-pills pull-right" style="margin-top:30px">
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/login'">Login</button></li>
            </ul>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $this->session->flashdata('verify_msg'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>User Registration Form</h4>
                </div>
                <div class="panel-body">
                    <?php $attributes = array("name" => "registrationform");
                    echo form_open("user/register", $attributes);?>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                        <span class="text-danger"><?php echo form_error('fname'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                        <span class="text-danger"><?php echo form_error('lname'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
                        <span class="text-danger"><?php echo form_error('username'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="subject">Password</label>
                        <input class="form-control" name="password" placeholder="Password" type="password" />
                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="subject">Confirm Password</label>
                        <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                        <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-default">Signup</button>
                        <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                    </div>
                    <?php echo form_close(); ?>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>