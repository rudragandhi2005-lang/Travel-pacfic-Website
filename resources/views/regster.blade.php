<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiton</title>
    <link rel="stylesheet" href="regsiton.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    {{-- @php
        print_r($errors);
    @endphp --}}
    <div class="box1">
        <div class="container text-center p-3 ">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 class="text-white mt-2">Register Now</h2>
                    <form action="/register_user" method="POST">
                        @csrf
                        <div class="input-group mb-3 mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input name="fullname" value="{{ old('fullname') }}" type="text" class="form-control"
                                placeholder="FullName" aria-label="FullName" aria-describedby="basic-addon1" >
                        </div>
                        <span class="text-danger">
                            @error('fullname')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="input-group mb-3 mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input name="username" value="{{ old('username') }}" type="text" class="form-control"
                                placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="input-group mb-3 mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input name="password" type="password" value="{{ old('password') }}"
                                class="form-control rounded-end" placeholder="password" aria-label="password"
                                aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="input-group mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input name="con_password" type="password" value="{{ old('cpassword') }}"
                                class="form-control rounded-end" placeholder="confirm password"
                                aria-label="confirm password" aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('con_password')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="input-group mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-envelope-open-text"></i></span>
                            <input type="email" value="{{ old('email') }}" name="email"
                                class="form-control rounded-end" placeholder="abc@example.com" aria-label="email"
                                aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="input-group mb-3 mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" value="{{ old('mono') }}" name="mobileno"
                                class="form-control rounded-end" placeholder="Mobile number" aria-label="Mobile Number"
                                aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('mobileno')
                                {{ $message }}
                            @enderror
                        </span>
                        <!-- <button id="b1" class="btn btn-outline-light text-white w-100 mt-4 rounded-2 hover-text-black">Register</button> -->

                        <div class="input-group mb-3 mt-4">
                            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-house"></i></span>
                            <input name="address" value="{{ old('fname') }}" type="text" class="form-control"
                                placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                        </div>
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="d-grid gap-2 input-group my-4">
                    <button class="btn btn-outline-light" type="submit">Register</button>
                </div>
                <div class="forgetpass">
                    <a href="#" class="text-decoration-none text-white">Forgot Password?</a>
                </div>
                <div class="icon text-center">
                    <i class="fa-brands fa-instagram" style="color: #cc195e8c;"></i>
                    <i class="fa-brands fa-facebook" style="color: #1100ff;"></i>
                    <i class="fa-brands fa-whatsapp" style="color: #00f074;" ></i>
                </div>
                <div class="createAcc mt-3 text-white">
                    Already have an account? <a href="/login" class="text-decoration-none text-white">Log In</a>
                </div>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>