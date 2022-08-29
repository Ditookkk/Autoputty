<!DOCTYPE HTML>
<html>
<head>
    <title>Home | AutoPUTTy ICON+</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppinsx">
    <link href="https://web.pln.co.id/statics/uploads/2017/04/ICONPLUS-1-300x215.png" rel="shortcut icon">
</head>

<body>
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <form action="/login" method="post">
        @csrf
            <label for "uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" value="login" >Continue</button>

        </form>
    </div>
    <div class="content">
        <h2> AutoConfig </h2>
    </div>
    <div class="teks">
        <h3> Halo, selamat datang! </h3> 
        <h1> Mudahkan konfigurasi perangkat <br>dengan AutoConfig
        </h1>
        <p> <br>Masukkan username dan password <br>untuk melanjutkannya</p>
        <img src="img/logoxpln.png">
    </div>
</body>
<footer>
    <p>&copy; KP Sanak</p>
</footer>
</html>