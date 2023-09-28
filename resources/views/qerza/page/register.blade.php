@extends('layouts.fullwidth')

@section('content')
<div class="col-md-6">
					
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="{{ url('index')}}"><img src="{{ asset('images/logo-full.png')}}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                    <form action="{{ url('index')}}">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Username</strong></label>
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input type="email" class="form-control" placeholder="hello@example.com">
                        </div>
                         <div class="form-group position-relative">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" id="dz-password" class="form-control" value="123456">
                            <span class="show-pass eye">
                            
                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>
                            
                            </span>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p class="text-white">Already have an account? <a class="text-white" href="{{ url('page-login')}}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection