<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zeamre be noba</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- Google Font -->
    <link rel="stylesheet">
</head>
<body>
<section class="content-header">
    <h1>
        Zemare
        <small>ordering table</small>
        </div>
    </h1>
</section>
<div class="jumbotron" >
    <div>
        <div class="form-group" style="margin-left:40%;margin-right:40%;margin-bottom: 10%;margin-top: 10%">
            <form action="pages/admin/work.php" method="post" autocomplete="on" autocapitalize="on">
                UserName : <input class="form-control" type="text" name="username" "> <br>
                Password : <input class="form-control" type="password" name="password" ><br>
                <input class="form-control btn btn-success" type="submit" value="Login" name="submit">
            </form>
        </div>
    </div>

</div>
</body>
<script src="bower_components/changeplay.js"></script>
</html>