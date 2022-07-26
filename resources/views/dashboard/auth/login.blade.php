@extends('dashboard.auth.auth-master')
@section('title', 'Login')
@section('content')
<style>
    .img-login-logo{
        width: 190px;
        border-radius: 10px;
    }
</style>
<main role="main" class="ion-checkout">
    <div class="row mt-3">
        <div class="col-sm-12 text-center">
            <img src="{{asset('front_assets/img/logo.png')}}" alt="Logo" class="img-login-logo">
        </div>
    </div>
    <div class="card mb-3">
       <div class="card-header font-weight-bold text-center text-success">
           Login
       </div>
        <div class="card-body p-0">
            <form action="{{route('loginDash')}}" method="post" class="p-2">
                {{-- <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if (Session::has('alert-' . $msg))
                            <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                {{ Session::get('alert-' . $msg) }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                        @endif
                    @endforeach
                </div> --}}
                @csrf
                <div class="ion-list ion-no-margin ion-no-padding">
                <div class="text-field">
                    <input type="text" required name="username" title="Username" value="{{old('username')}}" />
                    <label>Enter Your Username <span class="danger">*</span></label>
                    <span class="text-danger form-text">@error('username') {{$message}} @enderror</span>
                </div>
                </div>
                <div class="ion-list ion-no-margin">
                <div class="text-field">
                    <input type="password" required name="password" title="Password" value="{{old('password')}}" />
                    <label>Enter Your Password<span class="danger">*</span></label>
                    <span class="text-danger form-text">@error('password') {{$message}} @enderror</span>
                </div>
                </div>
                <button type="submit" class="btn btn-block btn-oringe ion-no-margin" id="login">Login Now</button>
            </form>
            <div class="p-3 mb-3">                
                <div class="float-left">
                    <a href="{{url('dashboard/auth/forget-password')}}" class="text-center mt-3 text-primary">Lost your password?</a>
                </div>
                <div class="float-right">
                    <a href="{{url('dashboard/register')}}" class="text-center mt-3 text-primary">Register</a>
                </div>
            </div>    
        </div>       
    </div>
 </main>

@endsection