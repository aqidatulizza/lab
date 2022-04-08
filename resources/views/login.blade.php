<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Lab</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    
    </head>
<body>
    <div class="container">
        <div class="login">
            <form action="{{ url('/user-peminjaman') }}">
                <div class="tang">
                    <img src="images/tang.png" alt="">
                </div>
                <h1>Login</h1>
                
                <p>Kelola Lab SMK Negeri 4 Malang</p>
                <label for="username">Username</label>
                <input class="username" type="text" placeholder="Ex: johndepp12">
                <label for="username">Password</label>
                <input class="password" type="password" placeholder="Min. 8 character">
                <div class="checkbox-text">
                    <div class="checkbox-content">
                    <input type="checkbox" value="" id="flexCheckDefault">
                    <label for="flexCheckDefault">
                        Ingat Saya
                    </label>

                    </div>
                    <a href="">Lupa Password?</a>
                </div>
                
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="right">
                <img src="images/login.png" alt="">
            </div>
    </div>
</body>