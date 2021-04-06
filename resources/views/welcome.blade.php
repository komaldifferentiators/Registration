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
            


              <form action ="todo_submit" method="POST">
                  @csrf
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="f_name" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="l_name" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                 <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="phone_no" class="form-control p_input">
                </div>
                
                <div>
                Subscription<select class="form-control" id="select2-dropdown" name="subscription">
                    <option value="" name = "subscription">Select Option</option>
                    
                    <option value="sub1" name="subscription">Subscription1</option>
                    <option value="sub2" name="subscription">Subscription2</option>
                   
                </select>
            </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Sign Up</button>
                </div>

                <p class="sign-up text-center">Already have an Account?<a href="todo_create"> Sign In</a></p>
                <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
            </form> 


        </div>
    </body>
</html>
