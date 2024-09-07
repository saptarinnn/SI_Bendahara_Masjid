<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIM Masjid</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="SIM Masjid">
    <meta name="author" content="Sistem informsi manajemen keuangan masjid">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300..900&family=Jaini+Purva&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Darker Grotesque", system-ui !important;
            font-weight: bold !important;
        }

        .logo-text {
            font-family: "Jaini Purva", system-ui !important;
        }
    </style>

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5 d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <h2 class="auth-heading text-center mb-5">Masuk ke <span class="logo-text">SIM Masjid</span></h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="email mb-3">
                                <label class="sr-only" for="username">Username</label>
                                <input id="username" name="username" type="text" class="form-control fw-bold signin-email @error('username') is-invalid @enderror" placeholder="Username" required="required">
                                @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--//form-group-->
                            <div class="password mb-3">
                                <label class="sr-only" for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control fw-bold signin-password" placeholder="Password" required="required">
                            </div>
                            <!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Masuk</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5 text-muted">Sistem Informasi Manajemen Masjid</div>
                    </div>
                    <!--//auth-form-container-->

                </div>
                <!--//auth-body-->

            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h4 class="mb-1 text-white logo-text">SIM Masjid</h4>
                        <div>Sistem Informasi Manajemen Keuangan Masjid</div>
                    </div>
                </div>
            </div>
            <!--//auth-background-overlay-->
        </div>
        <!--//auth-background-col-->

    </div>
    <!--//row-->


</body>
</html>
