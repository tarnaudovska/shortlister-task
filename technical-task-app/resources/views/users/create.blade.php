<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
     
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: rgb(255, 255, 255);
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh;
            }
            .container {
                background: rgb(179, 171, 160);
                padding: 20px;
                border-radius: 8px;
                width: 350px;
                text-align: center;
            }
            h1 {
                margin-bottom: 20px;
                color:rgb(51, 67, 102);
            }
            input[type="text"], input[type="email"], input[type="date"]{
                widows: 100%;
                padding: 10px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
            button {
                background-color: #636e88;
                color: white;
                padding: 10px 15px;
                margin-top: 30px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 60%;
                font-size: 16px;
            }
            button:hover {
                background-color: #7a88a7;
            }
            .black-link {
                display: block;
                text-decoration: none;
                color: rgb(48, 47, 63);
            }
            .black-link:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Add New User</h1>
            <form action="/users" method="POST">
                @csrf
                <input type="text" name="name" placeholder="name" required><br>
                <input type="email" name="email" placeholder="email" required><br>
                <input type="text" name="phone" placeholder="phone" required><br>
                <input type="date" name="date_of_birth" placeholder="date_of_birth" required><br>
                <button type="submit">Add new user</button>
            </form>
            <br>
            <a href="{{ route('users.index') }}" class="black-link">See users list</a>
        </div> 
    </body>
</html>
