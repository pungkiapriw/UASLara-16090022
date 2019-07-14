@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
           <div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
               <img style="width:100px;height: 100px;" src="{{ asset('private/assets/backend/images/me.jpg') }}" alt="" class="img-circle">
               <br>
               <br>
                <form class="cmxform" id="signupForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                        <div class="form-group row" style="position:relative;left:30%;">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            <p>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="position:relative;left:30%;">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"   >
                            <div class="col-md-6 offset-md-4">
                                <div style="position: relative;left: 50%"class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row"   >
                            <div style="position: relative;left: 25%"class="col-md-6 offset-md-4">
                                <button style="width:100%;" type="submit" class="submit btn-success btn btn-large">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a  class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </p>
                    </fieldset>
                    </form>
           </div>

       </div>


    </div>
</div>
@endsection
