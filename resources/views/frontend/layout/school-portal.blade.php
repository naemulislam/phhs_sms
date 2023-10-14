<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
            background-size: cover;
            background-repeat: no-repeat;

            font-family: 'Numans', sans-serif;
        }

        .container {

            align-content: center;
        }

        .card {
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }





        .card-header h3 {
            color: white;
        }



        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;

        }

        .nav-link {
            color: #fff;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .nav-link {
            border: 0px solid transparent;
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
    </style>
</head>

<body>
    <div class="container">

    </div>
    <section>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-3">
                    <a href="{{route('home')}}">
                    <h4 class="text-center text-white"><i class="fa fa-home"></i> Back to home</h3>
                    </a>
                </div>
                <div class="col-md-9">
                    <h2 class="text-center text-white">School Login Portal</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="tabs-right-sec">

                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="true">Admin</a>

                            <a class="nav-item nav-link" id="nav-principle-tab" data-toggle="tab" href="#nav-principle" role="tab" aria-controls="nav-principle" aria-selected="false">Principle</a>

                            <a class="nav-item nav-link" id="nav-teacher-tab" data-toggle="tab" href="#nav-teacher" role="tab" aria-controls="nav-teacher" aria-selected="false">Teacher</a>

                            <a class="nav-item nav-link" id="nav-hr-tab" data-toggle="tab" href="#nav-hr" role="tab" aria-controls="nav-hr" aria-selected="false">Human Resources Login</a>

                            <a class="nav-item nav-link" id="nav-accountant-tab" data-toggle="tab" href="#nav-accountant" role="tab" aria-controls="nav-accountant" aria-selected="false">Acountant</a>

                            <a class="nav-item nav-link" target="_blank" href="{{route('site.userlogin')}}"  aria-selected="false"><i class=" fa fa-user mr-2"></i>User Login</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Admin Login</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('admin.login.store')}}">
                                            @csrf
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="email" placeholder="Enter your email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">

                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-principle" role="tabpanel" aria-labelledby="nav-principle-tab">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Principle Login</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('principle.login.store')}}">
                                            @csrf
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">

                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-teacher" role="tabpanel" aria-labelledby="nav-teacher-tab">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Teacher Login</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('teacher.login.store')}}">
                                            @csrf
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">

                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="nav-hr" role="tabpanel" aria-labelledby="nav-hr-tab">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Human Resources Login</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('hr.login.store')}}">
                                            @csrf
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">

                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-accountant" role="tabpanel" aria-labelledby="nav-accountant-tab">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Accountant Login</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('accountant.login.store')}}">
                                            @csrf
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Login" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">

                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>