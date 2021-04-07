<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        </style>
    </head>
    <body class="antialiased">
       <h1>Login successfull</h1>
       <h2>Hello,{{session('email')}}</h2>
       <!-- <h2>Last Name-{{session('user2')}}</h2>
       <h2>Email-{{session('user3')}}</h2>
       <h2>Subscription-{{session('user4')}}</h2> -->
       
       <a href = "todo_logout">Logout<a>
    </body>
</html>
