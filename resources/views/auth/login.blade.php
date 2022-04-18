@extends('layouts.auth-master')

@section('content')
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form method="post" class="sign-in-form" action="{{ route('login.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <i class="fa-solid fa-dumbbell login-logo"></i>
              <h2 class="title">تسجيل الدخول</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text"  name="username" value="{{ old('username') }}" placeholder="اسم المستخدم" required="required" autofocus>
                @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" value="{{ old('password') }}" placeholder="كلمة السر" required="required">
                @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
              </div>
              <input type="submit" value="تسجيل الدخول" class="btn solid" />
              {{-- <div class="form-group mb-3">
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" value="1">
            </div> --}}
            </form>



            <form method="post" class="sign-up-form" action="{{ route('register.perform') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <h2 class="title">إنشاء حساب جديد</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="الاسم" required="required" autofocus>
                @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="كلمة السر" required="required">
                @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
               @endif
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="تأكيد كلمة السر" required="required">
                @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
              <input type="submit" class="btn" value="إنشاء حساب" />
            </form>
          </div>
        </div>

        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>ليس لديك حساب؟</h3>
              <p>
                يمكنك الآن وبخطوات بسيطة التسجيل وإنشاء حساب للحصول على أفضل إدارة للمركز الرياضي الخاص بك
              </p>
              <button class="btn transparent" id="sign-up-btn">
                إنشاء حساب
              </button>
            </div>
            <img src="img/log.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>لديك حساب؟</h3>
              <p>
                  قم بتسحيل الدخول لإكمال متابعة تفاصيل المركز الرياضي الخاص بك
              </p>
              <button class="btn transparent" id="sign-in-btn">
                تسجيل الدخول
              </button>
            </div>
          </div>
        </div>
      </div>
      <script src="{{asset('js/account.js')}}"></script>
      @endsection
