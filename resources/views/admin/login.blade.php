<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Agung Kalimosodo | {{ $title }}</title>
    <style>
        body {
            display: flex;
            align-items: center;
            background-color: #dddd;
        }
    </style>
</head>
<body>
    <div class="login">
        <img src="{{ "$logo" }}" width="48px">
        <br>
        <h2>Agung Kalimosodo</h2>
        <br>
        <hr>
        <form action="/home" method="GET">
            {{-- <label for="Username">Input your username</label> --}}
            <input type="text" name="username" id="username" placeholder="username" maxlength="8" >
            {{-- <label for="password">Input your password</label> --}}
            <input type="password" name="password" id="password" placeholder="password" maxlength="8" >
            <input type="submit" value="login">
        </form>
    </div>
</body>
</html>
