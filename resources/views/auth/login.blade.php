
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in | {{ config('app.name') }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/adminIte/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="/adminIte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/adminIte/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="{{url('/')}}"><b>HOTEL</b>pengandaran</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Masuk untuk memulai sesi Anda</p>
<form action="?" method="post">
<div class="input-group mb-3">
<input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}"placeholder="username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
@error('username')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('password')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox"name="remember" id="remember">
<label for="remember">
ingatkan saya 
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">
<i class="fas fa-sign-in-alt"></i>Log In</button>
</div>

</div>
</form>


<p class="mb-1">
<a href="forgot-password.html"></a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center"></a>
</p>
</div>

</div>
</div>


<script src="/adminIte/plugins/jquery/jquery.min.js"></script>

<script src="/adminIte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/adminIte/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
