<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="bg-image d-flex align-items-center" style="background-image: url('{{asset('Assets/LoginBg.jpeg')}}'); background-repeat: no-repeat; background-size: 1550px; height: 100vh; filter: blur(6px);">
    </div>
    <div class="w-25 m-auto position-absolute top-50 start-50 translate-middle">
        <div class="position-absolute top-0 start-50 translate-middle pb-3">
            <img src = {{asset('Assets/logo.png')}} width= 115px>
        </div>
        <div class="rounded-3 bg-light mx-auto p-5 bg-opacity-50 shadow">
        
            <form action="/" method="POST">
            @csrf
                <div class="form-group pb-4">
                    <label class="h6" for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autocomplete="off" >
                    {{-- @error('')
                        
                    @enderror --}}
                </div>
                <div class="form-group pb-1">
                    <label class="h6" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name = "password" placeholder="Enter your password">
                </div>
                <div class="form-check pb-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me?</label>
                </div>
                <button type="submit" class="btn btn-primary col-md-12 text-center">Login</button>
            </form>
        </div>
    </div>
</body>
</html>


