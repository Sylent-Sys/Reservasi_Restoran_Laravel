
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Registration</title>
    <!-- CSS files -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900' rel='stylesheet'>
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>
    
    <style>
      :root {
      	--tblr-font-sans-serif: 'Poppins';
      }
      body {overflow:hidden;}
      @media (max-width: 992px) {body {overflow: visible;} #card{justify-content: center}}
    </style>
  </head>
  
  <body class="m-0 p-0 d-flex" style="background-color: #0D1B2B">
      <div class="container-fluid d-flex flex-row m-0 p-0 align-items-center">
        <div class="row w-100 m-0 p-0 d-flex align-items-center">
          <div class="col-md-8 col-lg-6 m-0 p-0">
            <img src="{{ asset('images/reglog.png')}}" style="height:100%">
          </div>
          <form class="col-md-8 col-lg-6 m-0 p-0 d-flex" id="card" action="{{ route('registration.post') }}" method="POST" >
            @csrf 
              <div class="w-75 my-6">
                <div class="text-center fs-1 fw-bold text-white">Create Account</div>
                  <div class="text-center fs-6 text-white mx-lg-6">
                    Seize your seat, savor the flavor! Effortless booking for seats and meals awaits you
                  </div>
                  <div class="mb-3 mt-6">
                    <input type="text" class="form-control bg-transparent border-1 fs-5 rounded-3 text-white" placeholder="Name" name="name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control bg-transparent border-1 fs-5 rounded-3 text-white" placeholder="Email" name="email">
                  </div>
                  <div class="mb-6">
                    <input type="password" class="form-control bg-transparent border-1 fs-5 rounded-3 text-white" placeholder="Password" name="password">
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn w-100 fs-5 rounded-3">Register</button>
                  </div>
                  <p div class="text-center mb-6 fs-6 text-white mx-lg-6">By registering an account, you accept Clason’s 
                    <a class="text-yellow text-decoration-none">Terms of Use and Privay Policy</a> 
                  </p>
                  <div class="text-center fs-6 text-white">
                    Already a member? <a href="{{ route('login') }}" class="text-yellow text-decoration-none">Login</a>
                  </div>
              </div>
            </form>
        </div>
      </div>

    <!-- JS files -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js?1692870487') }}" defer></script> 
  </body>
</html>