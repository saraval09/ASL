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
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/user'">Signup</button></li>
            </ul>

        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-4 well">
            <?php
            $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
            echo form_open("login/index", $attributes);?>
           <!-- <?php
/*            if(!empty($authUrl)) {
                echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt=""/></a>';
            }else{

                */?>
                <div class="wrapper">
                    <h1>Facebook Profile Details </h1>
                    <?php
/*                    echo '<div class="welcome_txt">Welcome <b>'.$userData['first_name'].'</b></div>';
                    echo '<div class="fb_box">';
                    echo '<p class="image"><img src="'.$userData['picture_url'].'" alt="" width="300" height="220"/></p>';
                    echo '<p><b>Facebook ID : </b>' . $userData['oauth_uid'].'</p>';
                    echo '<p><b>Name : </b>' . $userData['first_name'].' '.$userData['last_name'].'</p>';
                    echo '<p><b>Email : </b>' . $userData['email'].'</p>';
                    echo '<p><b>Gender : </b>' . $userData['gender'].'</p>';
                    echo '<p><b>Locale : </b>' . $userData['locale'].'</p>';
                    echo '<p><b>FB Profile Link : </b>' . $userData['profile_url'].'</p>';
                    echo '<p><b>You are login with : </b>Facebook</p>';
                    echo '<p><b>Logout from <a href="'.base_url().'user_authentication/logout">Facebook</a></b></p>';
                    echo '</div>';
                    */?>
                </div>
            --><?php /*} */?>
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="txt_username" class="control-label">Username</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="txt_password" class="control-label">Password</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                        <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
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