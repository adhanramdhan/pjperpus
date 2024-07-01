<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('assets/login/assets/css/styles.css') }}">
      <title>Login form adhan</title>
      
   </head>
   <body>
      
      <div class="login">
         @include('layout.inc.toast');
         <img src="{{ asset('assets/login/assets/img/mayreel-guardian.gif')}}" alt="login image" class="login__img">
         <div class="glass">

            
            <form action="{{ route('actionlogin') }}" method="POST">
               @csrf
               {{-- gambar ini mau di letakan di samping form bagai --}}
               
               <h1 class="login__title">Login</h1>
            <div class="login__form-content">
               <img src="{{ asset('assets/login/assets/img/cat.gif') }}" alt="" class="login-img-side"> 
               <div class="login__form-fields">

                  <div class="login__content">
                     <div class="login__box">
                        <i class="ri-user-3-line login__icon"></i>

                        <div class="login__box-input">
                           <input name="email" type="text" required class="login__input" id="login-email" placeholder=" ">
                           <label for="login-email" class="login__label">Email</label>
                        </div>
                     </div>

                     <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                           <input name="password" type="password" required class="login__input" id="login-pass" placeholder=" ">
                           <label for="login-pass" class="login__label">Password</label>
                           <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        </div>
                     </div>
                  </div>

                  <div class="login__check">

                     <a href="#" class="login__forgot">Forgot Password?</a>
                  </div>

                  <button type="submit" class="login__button">Login</button>

                  <p class="login__register">
                     Don't have an account? <a href="#">Register</a>
                  </p>
                  
               </div>
            </div>
         </form>
      </div>
      </div>
      <!--=============== MAIN JS ===============-->
      <script src="{{ asset('assets/login/assets/js/main.js') }}"></script>
      @include('layout.inc.js');


   </body>
</html>