@extends('admin.login.index')
@section('content')
                                <form class="user" method="POST" role="form" action="admin/dangnhap">
                                 <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..."onclick="openKeyboard(this.id, 'none', null, 200);"` >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" onclick="openKeyboard(this.id, 'none', null, 200);">
                                    </div>

                                    <div class="form-group">
                                        <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY')  }}"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
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
