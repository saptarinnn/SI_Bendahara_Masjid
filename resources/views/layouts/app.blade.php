<!DOCTYPE html>
<html lang="en">
@include('layouts._head')

<body class="app">
    @include('layouts._header')
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            @yield('content')
        </div>
        <!--//app-content-->

        <footer class="app-footer">
            <div class="text-end py-3 px-5">
                <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                <small class="copyright">Template by <a class="app-link" href="http://themes.3rdwavemedia.com"
                        target="_blank">Xiaoying Riley</a></small>
                {{-- <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small> --}}

            </div>
        </footer>
        <!--//app-footer-->

    </div>
    <!--//app-wrapper-->


    @include('layouts._script')

    <script>
        @if ($message = session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ $message }}',
                icon: 'success',
                confirmButtonText: 'Keluar'
            })
        @endif

        @if ($message = session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ $message }}',
                icon: 'error',
                confirmButtonText: 'Keluar'
            })
        @endif

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Data tidak akan dapat dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus data!",
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        $('.show_confirm_ps').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Reset password?",
                text: "Password petugas akan direset ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, reset password!",
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        new DataTable('#data-table');
    </script>

</body>

</html>
