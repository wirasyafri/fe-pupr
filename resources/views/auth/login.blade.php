@extends('auth.mainAuth')
@section('container')

<div class="container-fluid" style="height: 100%;margin : 0;padding:0;">

    <!-- Register -->
    <div class="row position-relative ">
        <div class="col col-md-6 d-flex p-0 justify-content-center position-absoulute" style="border-color: red;">
            <img class="m-0" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-JdbM280Rs2Y%2FXjxgQTF6HEI%2FAAAAAAAAAAg%2FYdyLp9V1tDkp2-kaFXCcgc9IeQNxt5o1gCLcBGAsYHQ%2Fs1600%2Fdummy.jpg&f=1&nofb=1&ipt=3c8f3d2c29ec7f51c9b6b49b45d6f443e5f931da80ca0f88f40bbe02faebe9bd&ipo=images">
        </div>
        <div class="col col-md-6 d-flex justify-content-center align-items-center" style=" border-color: green; background-color:#2D3F75 ;">
            <div class="" style="width: 500px;">
                <div class="text-center">
                    <h1 class="mb-2 fw-bolder" style="color: #fff;">BATARA</h1>
                    <h3 class=" fw-bolder" style="color: #fff;">Basis Data Rawa</h3>
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

    </div>
</div>
<!-- /Register -->

@endsection