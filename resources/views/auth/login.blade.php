@extends('auth.mainAuth')
@section('container')

<div class="container-fluid px-0 ">
    <!-- Register -->
    <div class="row m-0 p-0">
        <div class="col col-md-6 d-flex p-0 justify-content-center align-items-center" style="height: 100vh;" id="col-1">
            <img class="m-0" id="gambar" src="{{ asset('assets/logoSandra.png') }}" style="height:30vh;width:50vh">
        </div>
        <div id="col-2" class="col col-md-6 d-flex flex-column justify-content-center align-items-center" style="background-color:#2D3F75; position:relative">
            <div class="d-flex flex-column ">
                <div style=" width:100%">
                    <div class="text-center" style="margin-bottom: 40px;">
                        <img class="my-4" src="{{ asset('assets/logoPupr.png') }}" alt="">
                        <h2 class="mb-2 fw-bolder" style="color: #fff; font-size: large;">BALAI TEKNIK RAWA</h1>
                            <h3 class=" fw-light" style="color: #fff; font-size: large;">Kementrian Pekerjaan Umum dan Perumahan Rakyat</h3>
                    </div>
                    <form id="formAuthentication" class="mb-3" action="{{ url('') }}" method="GET">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bolder" style="color: #fff; ">Username</label>
                            <input type="text" class="form-control fw-bolder" id="email" style="background-color: #fff; height: 50px; " name="email-username" placeholder="Enter your email or username" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-bolder" style="color: #fff;" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control fw-bolder" name="password" placeholder="Password" style="height: 50px;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer" style="height: 50px;"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <!-- {{-- <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div> --}} -->
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100 fw-bolder" style="background-color: #FFC928;" type="submit">Login</button>
                        </div>
                        <a href="{{ url('') }}/forgot-password">
                            <p class="fw-bolder text-center" style="color: #fff;">Lupa Password?</p>
                        </a>

                    </form>
                </div>
            </div>
            <footer class="p-0">
                <div class="text-center pt-2" style="position:absolute;bottom:0;left:0;width:100%;border-top: 2px solid #fff;color:#fff">
                    <p class="mb-0" style="font-size: 12px;">&copy; All Rights Reserved. Balai Teknik Irigasi</p>
                    <p style="font-size: 12px;">Privacy and Terms</p>
                </div>
            </footer>
        </div>



    </div>
</div>
<!-- /Register -->

@endsection