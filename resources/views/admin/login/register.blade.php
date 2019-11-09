@extends('admin.login.index')
@section('content')

    <form class="user" method="POST" role="form" action="admin/dangki">
        <input type="hidden" name="_token" value="{{csrf_token()}}" >
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="exampleInputEmail" value="" name="text" aria-describedby="emailHelp" placeholder="Enter Name..." onclick="openKeyboard(this.id, 'none', null, 200);"` >
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" value="" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..."onclick="openKeyboard(this.id, 'none', null, 200);"` >
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword" value="" name="password" placeholder="Password" onclick="openKeyboard(this.id, 'none', null, 200);">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="reset" placeholder="ConfirmPassword" onclick="openKeyboard(this.id, 'none', null, 200);">
        </div>
{{--        <div id="wrap">--}}
{{--            <input id="keyboard" type="text" />--}}
{{--        </div>--}}
        <style>
            #wrap {
                display: block;
                margin: 0 auto;
                width: 200px;
                top:40%;
            }
        </style>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}" data-callback="YourOnSubmitFn"></div>
            @if($errors->has('g-recaptcha-response'))
                <span style="display: block" class="invalid-feedback">
                    {{$errors ->first('g-recaptcha-response')}}
                </span>
                @endif
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">
            Sign Up
        </button>
        <hr>
        <a href="" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
        <a href="" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
        </a>
    </form>

@endsection
