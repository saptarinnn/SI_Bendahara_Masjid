@extends('layouts.app')
@section('content')
<div class="container-xl">

    <h1 class="app-page-title">Dashboard</h1>

    <div class="row g-4">
        <div class="col-12">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-php" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.182.185.522m4.48 2.666V11.85h-.79v1.626H4.153V11.85h-.79v3.999h.79v-1.714h1.682v1.714zm.703-3.999h1.6q.433 0 .732.179.3.175.46.477.158.302.158.677t-.161.677q-.159.299-.463.474a1.45 1.45 0 0 1-.733.173H8.12v1.342h-.791zm2.06 1.714a.8.8 0 0 0 .084-.381q0-.34-.184-.521-.184-.182-.513-.182h-.66v1.406h.66a.8.8 0 0 0 .375-.082.57.57 0 0 0 .237-.24Z"/>
                                  </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Need more help?</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4">

                    <div class="intro mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet eros vel diam semper mollis.</div>
                    <ul class="list-unstyled">
                        <li><strong>Tel:</strong> 0800 1234 5678</li>
                        <li><strong>Email:</strong> <a href="#">support@website.com</a></li>
                    </ul>
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">Start Live Chat</a>
                </div>
                <!--//app-card-footer-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <!--//row-->

</div>
<!--//container-fluid-->
@endsection
