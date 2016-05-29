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
                <li class="active"> <button class="ui-state-default" onclick="window.location.href='/index.php/user'">Signup</button></li>
            </ul>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Department Name</th>
                    <th>Head of Department</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                    <tr>
                        <td><?php echo ($page+$i+1); ?></td>
                        <td><?php echo $deptlist[$i]->department_name; ?></td>
                        <td><?php echo $deptlist[$i]->employee_name; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</body>
</html>