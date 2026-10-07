<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div>
                        <h3 class="my-3 py-3">Login now</h3>
                    </div>
                    <form method="POST" action="login_user">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Username</label>
                            <input name="username" type="text" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 text-white">Submit</button>
                    </form>
                    <div class="text-center my-2">
                        <a href="/register" class="text-decoration-none text-white">Forget password</a>
                    </div>
                    <div class="icon text-center">
                        <i class="fa-brands fa-instagram" style="color: #cc195e8c;"></i>
                        <i class="fa-brands fa-facebook" style="color: #1100ff;"></i>
                        <i class="fa-brands fa-whatsapp" style="color: #00f074;"></i>
                    </div>
                    <div class="text-center my-2">
                        <P >Don't Have an account<a href="/register" class="text-decoration-none text-white">Register Now!!</a></P>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        @if (Session::get('success'))
            <script>
                Swal.fire({

                    icon: "success",
                    title: "{{ Session::get('success') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endif
</body>
</html>