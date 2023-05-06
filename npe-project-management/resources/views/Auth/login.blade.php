<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/Auth/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="m-5">
    <img src="{{ asset('img/login/Logo.png') }}" class="img-fluid" alt="">
    <div class="row justify-content-between">
        <div class="col-md-6">
            <img src="{{ asset('img/login/amico.png') }}" class="img-fluid mx-auto d-block mt-5" alt="">
        </div>
        <div class="col-md-4 m-auto">
            <div class="container p-5">
                <div class="text-center container-head">
                    <h4 class="login-title" >Login</h4>
                    <p class="login-desc" >Welcome to NPE Digital Project Management</p>
                </div>
                <div class="container-body mt-4">
                    <p class="input-label mb-1">Username</p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">
                        <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2.86667C12.5467 2.86667 13.8 4.12 13.8 5.66667C13.8 7.21334 12.5467 8.46667 11 8.46667C9.45334 8.46667 8.2 7.21334 8.2 5.66667C8.2 4.12 9.45334 2.86667 11 2.86667ZM11 14.8667C14.96 14.8667 19.1333 16.8133 19.1333 17.6667V19.1333H2.86667V17.6667C2.86667 16.8133 7.04 14.8667 11 14.8667ZM11 0.333336C8.05334 0.333336 5.66667 2.72 5.66667 5.66667C5.66667 8.61334 8.05334 11 11 11C13.9467 11 16.3333 8.61334 16.3333 5.66667C16.3333 2.72 13.9467 0.333336 11 0.333336ZM11 12.3333C7.44 12.3333 0.333336 14.12 0.333336 17.6667V21.6667H21.6667V17.6667C21.6667 14.12 14.56 12.3333 11 12.3333Z" fill="#0061C7"/>
                        </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="">
                    </div>
                    <p class="input-label mb-1 mt-3">Password</p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">
                        <svg width="15" height="15" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0.666668C13.4145 0.666668 14.771 1.22857 15.7712 2.22877C16.7714 3.22896 17.3333 4.58551 17.3333 6V8.66667H19.6667C20.0606 8.66667 20.4507 8.74427 20.8147 8.89503C21.1787 9.04579 21.5094 9.26677 21.788 9.54535C22.0666 9.82392 22.2875 10.1546 22.4383 10.5186C22.5891 10.8826 22.6667 11.2727 22.6667 11.6667V24.3333C22.6667 24.7273 22.5891 25.1174 22.4383 25.4814C22.2875 25.8454 22.0666 26.1761 21.788 26.4547C21.5094 26.7332 21.1787 26.9542 20.8147 27.105C20.4507 27.2557 20.0606 27.3333 19.6667 27.3333H4.33334C3.53769 27.3333 2.77462 27.0173 2.21202 26.4547C1.64941 25.892 1.33334 25.129 1.33334 24.3333V11.6667C1.33334 10.871 1.64941 10.108 2.21202 9.54535C2.77462 8.98274 3.53769 8.66667 4.33334 8.66667H6.66667V6C6.66667 4.58551 7.22857 3.22896 8.22877 2.22877C9.22896 1.22857 10.5855 0.666668 12 0.666668ZM19.6667 10.6667H4.33334C4.06812 10.6667 3.81377 10.772 3.62623 10.9596C3.43869 11.1471 3.33334 11.4015 3.33334 11.6667V24.3333C3.33334 24.8853 3.78134 25.3333 4.33334 25.3333H19.6667C19.9319 25.3333 20.1862 25.228 20.3738 25.0404C20.5613 24.8529 20.6667 24.5985 20.6667 24.3333V11.6667C20.6667 11.4015 20.5613 11.1471 20.3738 10.9596C20.1862 10.772 19.9319 10.6667 19.6667 10.6667ZM12 16C12.5304 16 13.0391 16.2107 13.4142 16.5858C13.7893 16.9609 14 17.4696 14 18C14 18.5304 13.7893 19.0391 13.4142 19.4142C13.0391 19.7893 12.5304 20 12 20C11.4696 20 10.9609 19.7893 10.5858 19.4142C10.2107 19.0391 10 18.5304 10 18C10 17.4696 10.2107 16.9609 10.5858 16.5858C10.9609 16.2107 11.4696 16 12 16ZM12 2.66667C11.1159 2.66667 10.2681 3.01786 9.64298 3.64298C9.01786 4.2681 8.66667 5.11595 8.66667 6V8.66667H15.3333V6C15.3333 5.11595 14.9821 4.2681 14.357 3.64298C13.7319 3.01786 12.8841 2.66667 12 2.66667Z" fill="#0061C7" stroke="#0061C7"/>
                        </svg>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping" name="">
                    </div>
                    <div class="row justify-content-between mt-2 container-mid">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col text-end">
                            <a href="#" class="text-decoration-none">Forgot password</a>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" type="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>