<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>

<body>

    <div class="hero min-h-screen bg-base">
        <div class="card lg:card-side bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title mb-4 text-3xl">Login</h2>
                <div class="join mb-4">
                    <button class="join-item btn btn-primary"></button>
                    <input class="input input-bordered join-item" placeholder="Email" />
                </div>
                <div class="join mb-4">
                    <button class="join-item btn btn-primary"></button>
                    <input class="input input-bordered join-item" placeholder="Password" />
                </div>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">login</button>
                </div>
            </div>
            <div class="">
                <figure><img src="{{ asset('img/jointeam.jpeg') }}" alt="Album"
                        class="lg:block lg:h-96 rounded-r-xl sm:hidden" />
                </figure>
            </div>
        </div>
    </div>

</body>

</html>
