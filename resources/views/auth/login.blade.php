<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="{{ asset('asset/sufee-admin') }}/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark" style="background: #9c9c9c">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html" style="color: #ff1b1b">
                        <h1>PT. ABC</h1>
                        <h3>Login E-Kinerja</h3>
                    </a>
                </div>
                <div class="login-form" style="margin-top:100px">
                    <form>
                        <div class="form-group">
                            <label>Login As</label>
                            <select class="form-control" name="rule" id="rule">
                                <option value="Admin">Admin</option>
                                <option value="Manajer">Manajer</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="email" class="form-control" placeholder="Username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                        </div>
                                
                        <a href="{{ route('admin.dashboard') }}" type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login </a>
                             
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('asset/sufee-admin') }}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('asset/sufee-admin') }}/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('asset/sufee-admin') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/sufee-admin') }}/assets/js/main.js"></script>


</body>

</html>
