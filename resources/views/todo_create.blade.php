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
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <form method="post" action="todo_authenticate">
            @csrf
          <div class="form-group col-md-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control p_input">
          </div>
          <div class="form-group col-md-4">
            <label>Password</label>
            <input type="password" name="password" class="form-control p_input">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
          </div>

          <p class="sign-up">Don't have an Account?<a href="/"> Sign Up</a></p>
          <p class="sign-up"><a href="">Forgot Password</a></p>
        </form>
        </div>
    </body>
</html>
