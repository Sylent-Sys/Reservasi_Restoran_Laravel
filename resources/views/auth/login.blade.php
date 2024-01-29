
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Login</title>
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
            <div class="row w-100 m-0 p-0 d-flex justify-content-center align-items-center">
            <form class="col-md-8 col-lg-6 m-0 p-0 d-flex justify-content-lg-end " id="card" action="{{ route('login.post') }}" method="POST" >
                @csrf 
                <div class="w-75 my-6 me-lg-3">
                    <div class="text-center fs-1 fw-bold text-white">Welcome Home</div>
                    <div class="text-center fs-6 text-white mx-lg-6">
                        Seize your seat, savor the flavor! Effortless booking for seats and meals awaits you
                    </div>
                    <div class="mb-3 mt-6">
                        <input type="email" class="form-control bg-transparent border-1 fs-5 rounded-3 text-white" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control bg-transparent border-1 fs-5 rounded-3 text-white" placeholder="Password" name="password">
                    </div>
                    <div class="text-end fs-sm mb-6">
                        <a href="{{ route('login') }}" class="text-yellow text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn w-100 fs-5 rounded-3">Login</button>
                    </div>
                    <div class="text-center fs-6 text-white">
                        Not a member yet? <a href="{{ route('registration') }}" class="text-yellow text-decoration-none">Register</a>
                    </div>
                </div>
                </form>
                <div class="col-md-8 col-lg-6 m-0 p-0">
                <img src="{{ asset('images/reglog.png')}}" style="height:100%">
                </div>
            </div>
        </div>

        <!-- JS files -->
        <script src="{{ asset('tabler/dist/js/tabler.min.js?1684106062') }}" defer></script>
        <script src="{{ asset('tabler/dist/js/demo.min.js?1684106062') }}" defer></script>
    </body>
</html>