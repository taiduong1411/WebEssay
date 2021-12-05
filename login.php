<?php
    
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <style>
        .errorMessage {
            color: rgb(185, 0, 0);
            font-size: 14px;
        }
        
        .alert-success {
            text-align: center;
            margin-top: 20px;
        }
        
        body {
            background-color: white;
        }
        
        h2 {
            font-weight: 800;
            letter-spacing: 10px;
        }
        
        .container {
            user-select: none;
        }
        
        .form-login {
            box-shadow: 2px 1px 2px 2px rgb(189, 189, 189);
            background-color: white;
        }
        
        .btn {
            width: 100%;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="border p-3 rounded mt-5 form-login" id="myForm" action="login_submit.php" method="POST" role="form" >
                    <h2 class="mt-2 mb-2 text-center">Login</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-person-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-bookmarks-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                                        <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
                                </svg></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="check-box" type="checkbox">
                        <label for="check-box">Remember me</label>
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-pass">Forgot your password ?</a>
                    </div>
                    <button class="btn btn-success" type="submit" name="submit">Login</button>
                    <div class="alert alert-danger mt-4" style="display: none; text-align: center;">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(() =>{
            $('#myForm').submit(e =>{
                const username =  $('#username').val().trim();
                const password = $('#password').val().trim();
                if(username.length ===0 ){
                    messageError('Please enter your username');
                    e.preventDefault();
                }else if(username.length < 2){
                    messageError('Password have more than 2 character');
                    e.preventDefault();
                }else if(password.length===0){
                    messageError('Please enter your password');
                    e.preventDefault();
                }
            })
            
        });
        function messageError(message){
            $('.alert-danger').html(message);
            $('.alert-danger').show();
        }
    </script>
</body>

</html>