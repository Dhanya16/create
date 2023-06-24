<head>
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        body{
            background-image:url('images/nmamit.png');
            background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
            overflow:hidden;
            animation: moving-background 3s linear infinite;
        }
        @keyframes moving-background {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <div class="box">
    </div>
    <h1 class="title">LOG IN</h1>
    <form action="admin" method="POST">
        @csrf
        <input type="text" name="admin" class="textbox" placeholder="Username"><br><br>
        <input type="password" name="password" class="textbox" placeholder="Password"><br><br>
        <a href="." class="link">Forgot password?</a>
        <button type="submit" class="login">Log in</button>
    </form>
    <style>
        .box{
            text-align:center;
            margin-top:160px;
            margin-left:480px;
            margin-right:500px;
            opacity:0.5;
            width:600px;
            height:400px;
            background-color: white;
            border-radius:20px;
        }
        .title{
            font-family:cursive;
            font-style:bold;
            font-size:50px;
            text-align:center;
            position:relative;
            top:-400px;
        }
        .textbox {
            width: 300px;
            border: none;
            font-family: cursive;
            background-color: white;
            position:relative;
            right:-610px;  
            height:40px;   
        }
        input[type="text"]{
            top:-400px;
            font-size: 15px;
        }
        input[type="password"]{
            top:-390px;
            font-size: 15px;
        }
        .link{
            position:relative;
            top:-410px;
            right:-610px;
            font-family: cursive;
            font-size: 20px;
            text-decoration:none;
            color:rgb(0, 128, 255);
        }
        .login{
            color:white;
            background-color:rgb(0, 128, 255);
            border:none;
            top:-340px;
            position:relative;
            right:-540px;
            width:120px;
            height:60px;
            font-family: cursive;
            font-size: 25px;
            cursor:pointer;
        }
    </style>
</body>

