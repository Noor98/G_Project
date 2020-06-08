@extends('home.layouts.app')

@section('content')

<br><br>


<div id="login-page">
		<div class="container">
		   <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" >
                        @csrf
		    <div class="row">
		      <h2 style="text-align:center">تسجيل الدخول </h2>
                <br>
		      <div class="vl">
		        <span class="vl-innertext">or</span>
		      </div>

		      <div class="col">
		        <a href="#" class="fb btn">
		          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
		         </a>
		        <a href="#" class="twitter btn">
		          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
		        </a>
		        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
		          </i> Login with Google+
		        </a>
		      </div>

		      <div class="col">
		        <div class="hide-md-lg">
		          <p>Or sign in manually:</p>
		        </div>
               
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="الإيميل">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="كلمة المرور">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  
                        <input type="submit" value="سجل ">
		      </div>
		      
		    </div>
		  </form>
		</div>
	</div>
	<div class="bottom-container">
	  <div class="row">
	    <div class="col">
	      <a href="#" style="color:white" class="btn">Sign up</a>
	    </div>
	    <div class="col">
	      <a href="#" style="color:white" class="btn">Forgot password?</a>
	    </div>
	  </div>
	</div>




<br><br><br><br><br>
@endsection
