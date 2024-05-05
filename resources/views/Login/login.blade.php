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
                <h2 class="mb-4 text-3xl font-bold text-center">Login</h2>
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
                <div class="flex items-center mt-2">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                </div>
                <div class="flex items-center mt-5 justify-center">
                    <button class="btn btn-primary">Login</button>
                </div>
                <div class="flex items-center mt-5 justify-center">
                    <a href="#" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Forget Password?</a>
                </div>
                <div class="flex items-center justify-center">
                    <a class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Don't have an account? <a class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" href="{{ route('register') }}">Register</a>
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