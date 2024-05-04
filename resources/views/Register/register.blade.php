<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/d3a1b40e2e.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="hero min-h-screen bg-base">
        <div class="card lg:card-side bg-base-100 shadow-xl">
            <div class="card-body w-full">
                <h2 class="mb-4 text-3xl font-bold text-center">Register</h2>
                <div class="flex justify-center mb-2">
                    <label class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" class="rounded-lg input-sm w-full" placeholder="Email@gmail.com" />
                    </label>
                </div>
                <div class=" flex justify-center">
                    <label class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" class="rounded-lg input-sm w-full" placeholder="Password" />
                    </label>
                </div>
                <div class="flex justify-center mb-2">
                    <label class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" class="rounded-lg input-sm w-full" placeholder="Username" />
                    </label>
                </div>
                <div class="flex justify-center mb-2">
                    <label class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-phone"></i>   
                        <input type="number" class="rounded-lg input-sm w-full" placeholder="Phone" />
                    </label>
                </div>
                <div class="flex items-center mt-5 justify-center">
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <figure><img src="{{ asset('img/jointeam.jpeg') }}" alt="Album"
                        class="lg:block md:w-96 rounded-r-xl hidden" />
                </figure>
            </div>
        </div>
    </div>

</body>

</html>
