<!doctype html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from codervent.com/roksyn/demo/ltr/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2024 16:42:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SalePro inventory</title>

    <!--plugins-->
    <link href="{{asset('backend')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('backend')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!--Styles-->
    <link href="{{asset('backend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend')}}/cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('backend')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('backend')}}/css/dark-theme.css" rel="stylesheet">

</head>

<body>


    <!--authentication-->

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                <div class="card border-3">
                    <div class="card-body p-5">
                        <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>

                        <div class="row g-3 my-4">
                            <div class="col-12 col-lg-6">
                                <button
                                    class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                                        src="assets/images/icons/google-2.png" width="18" class="me-2"
                                        alt="">Log In with Google</button>
                            </div>
                            <div class="col col-lg-6">
                                <button
                                    class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                                        src="assets/images/icons/apple-logo.png" width="18" class="me-2"
                                        alt="">Log In with Apple</button>
                            </div>
                        </div>

                        <div class="separator section-padding">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR</p>
                            <div class="line"></div>
                        </div>

                        <div class="form-body mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmailAddress" value="{{ old('email') }}" placeholder="Enter Your Email"name="email">
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                      </span>
                                   @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                    <input type="password" class="form-control border-end-0"id="inputChoosePassword" name="password" placeholder="Enter Password"><a href="javascript:;" class="input-group-text bg-transparent"><iclass="bi bi-eye-slash-fill"></i></a>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"{{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end"> <a href="auth-basic-forgot-password.html">Forgot
                                        Password ?</a>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Don't have an account yet? <a
                                                href="{{route('register')}}">Sign up here</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>

    <!--authentication-->




    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

</body>

<!-- Mirrored from codervent.com/roksyn/demo/ltr/auth-basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2024 16:42:48 GMT -->

</html>
