<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{!! env('APP_NAME') !!} - Login </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{!! asset('back') !!}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{!! asset('back') !!}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{!! asset('back') !!}/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{!! asset('back') !!}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('back') !!}/assets/css/forms/switches.css">
    <link href="{!! asset('back') !!}/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{!! asset('back') !!}/plugins/animate/animate.css">
</head>
<body class="form">


  <div class="form-container outer" id="a-u-reload">
      <div class="form-form">
          <div class="form-form-wrap">
              <div class="form-container">
                  <div class="form-content">

                        <img src="{!! asset('frontend/asset/img/logo/logo.png') !!}" alt="logo" class="mb-3" width="80px">
                      <p class="">{{ __("Log in to your account to continue.") }}</p>

                      @if ($errors->any())
                        <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              {{ $error }}
                          @endforeach
                        </div>
                      @endif

                      @if (Session::has('warning'))
                        <div class="alert alert-warning">
                          {{ session('warning') }}
                        </div>
                      @endif
                      @if (Session::has('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div>
                      @endif

                      <form class="text-left" action="{!! route('login') !!}" method="post">
                        @csrf
                          <div class="form">

                              <div id="username-field" class="field-wrapper input">
                                  <label for="username">{{ __('Email') }}</label>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                  <input id="username" name="email" type="email" class="form-control" placeholder="e.g John_Doe">
                              </div>

                              <div id="password-field" class="field-wrapper input mb-2">
                                  <div class="d-flex justify-content-between">
                                      <label for="password">{{ __('Password') }}</label>
                                      {{-- <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a> --}}
                                  </div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                  <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                              </div>
                              <div class="d-sm-flex justify-content-between">
                                  <div class="field-wrapper" id="reload">
                                      <button type="submit" id="auto-unblock" class="btn btn-primary" value="">Log In</button>
                                  </div>
                                  <script type="text/javascript">
                                  $('#auto-unblock').on('click', function() {
                                        var block = $('#a-u-reload');
                                        $(block).block({
                                            message: '<svg> ... </svg>',
                                            timeout: 50000, //unblock after 2 seconds
                                            overlayCSS: {
                                                backgroundColor: '#fff',
                                                opacity: 0.8,
                                                cursor: 'wait'
                                            },
                                            css: {
                                                border: 0,
                                                padding: 0,
                                                backgroundColor: 'transparent'
                                            }
                                        });
                                    });
                                  </script>
                              </div>

                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{!! asset('back') !!}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{!! asset('back') !!}/bootstrap/js/popper.min.js"></script>
    <script src="{!! asset('back') !!}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{!! asset('back') !!}/assets/js/authentication/form-2.js"></script>
    <script src="{!! asset('back') !!}/plugins/blockui/jquery.blockUI.min.js"></script>

    <script src="{!! asset('back') !!}/plugins/blockui/custom-blockui.js"></script>

</body>
</html>
