@extends('home.layouts.app')

@section('content')

<br><br>

 <div id="register-page">
    <div class="container">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
     @csrf
      
        <div class="row">
          <div class="col-md-12">
            <h1>تسجيل </h1>
            <p>يرجى ملء هذا النموذج لإنشاء حساب.</p>
            <hr>

            <label for="name"><b>الاسم </b></label>
             <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
              
              
              
            <label for="email"><b>الايميل </b></label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              

            <label for="password"><b>كلمة المرور </b></label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

            <label for="password-confirm"><b>تأكيد كلمة المرور </b></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <hr>
            

            <button type="submit" class="registerbtn">تسجيل </button>
            <div class="row">
              <div class="col-md-12">
                <p style="margin:30px 0;">هل تمتلك حساب فعلا ? <a href="/login">سجل دخولك </a>.</p>
              </div>
            </div>
          </div>
        </div>
      
      
   

    </form>
    </div>
  </div>

<br><br><br><br><br>
@endsection