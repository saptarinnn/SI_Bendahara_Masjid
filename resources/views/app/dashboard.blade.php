@extends('layouts.app')
@section('content')
<div class="container-xl">

    <h1 class="app-page-title">Dashboard</h1>

    <div class="row g-4">
        <div class="col-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header px-3 pt-3 border-bottom-0 w-100">
                    <div class="row align-items-center justify-content-between gx-3">
                        <div class="col-auto">
                            <h5 style="font-weight: 900">Infaq Masjid</h5>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono" style=" display: flex; justify-content: center; align-items: center; margin: 0; padding: 0; ">
                                <i class="fa-solid fa-mosque"></i>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 pb-3">
                    <div class="intro mb-1" style="font-weight: 900; font-size: 20px;">Rp 1.000.000</div>
                    <div class="list-unstyled">Total Infaq</div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header px-3 pt-3 border-bottom-0 w-100">
                    <div class="row align-items-center justify-content-between gx-3">
                        <div class="col-auto">
                            <h5 style="font-weight: 900">Infaq Sosial</h5>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono" style=" display: flex; justify-content: center; align-items: center; margin: 0; padding: 0; ">
                                <i class="fa-solid fa-comments-dollar"></i>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 pb-3">
                    <div class="intro mb-1" style="font-weight: 900; font-size: 20px;">Rp 1.000.000</div>
                    <div class="list-unstyled">Total Infaq</div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header px-3 pt-3 border-bottom-0 w-100">
                    <div class="row align-items-center justify-content-between gx-3">
                        <div class="col-auto">
                            <h5 style="font-weight: 900">Petugas Zakat</h5>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono" style=" display: flex; justify-content: center; align-items: center; margin: 0; padding: 0; ">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 pb-3">
                    <div class="intro mb-1" style="font-weight: 900; font-size: 20px;">20</div>
                    <div class="list-unstyled">Total Petugas</div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <!--//row-->

</div>
<!--//container-fluid-->
@endsection
