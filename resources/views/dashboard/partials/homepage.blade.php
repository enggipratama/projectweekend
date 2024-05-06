<section>
    {{-- Profile view --}}
    <div class="text-center mb-10 mt-10 px-5">
        <div class="divider">
            <span
                class="bg-cardbase text-base text-xl font-bold me-2 px-5 py-2.5 border border-borderbase rounded-full dark:bg-cardbase dark:text-base">{{ __('Hello Wellcome,') }}
                {{ Auth::user()->name }} {{ __('🙌') }}</span>
        </div>
    </div>
    {{-- navigasi --}}
    <div class="justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-xl rounded-xl bg-cardbase border border-borderbase">
                <figure class="w-16 mx-auto mt-5">
                    <img class="rounded-lg"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{ Auth::user()->name }}</h2>
                    <p>{{ __('Role') }}</p>
                    <div class="card-actions mt-5">
                        <button
                            class="btn bg-base text-textbase hover:bg-textbase hover:text-base btn-sm hover:text-sm">Edit
                            Profile</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl rounded-xl bg-cardbase border border-borderbase">
                <figure class="w-16 mx-auto mt-5">
                    <img class="rounded-lg" src="img/Submit.png" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{ __('Submit your portfolio.') }}</h2>
                    <p>{{ __('Submit your creative portfolio for review. 😎') }}</p>
                    <div class="card-actions mt-5">
                        <button
                            class="btn bg-base text-textbase hover:bg-textbase hover:text-base btn-sm hover:text-sm">Submit</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl rounded-xl bg-cardbase border border-borderbase">
                <figure class="w-16 mx-auto mt-5">
                    <img class="rounded-lg" src="img/Review.png" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{ __('Check your submission status.') }}</h2>
                    <p>{{ __('Review your submission progress. 📖') }}</p>
                    <div class="card-actions mt-5">
                        <button
                            class="btn bg-base text-textbase hover:bg-textbase hover:text-base btn-sm hover:text-sm">Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- list portofolio --}}
    <div class="text-center mt-20 px-5">
        <div class="divider">
            <span
                class="bg-cardbase text-base text-xl font-bold me-2 px-5 py-2.5 border border-borderbase rounded-full dark:bg-cardbase dark:text-base">
                {{ __('List Portfolio') }}
            </span>
        </div>
    </div>
    {{-- navigasi portofolio --}}
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap gap-4">
        <button type="button"
            class="bg-cardbase text-base text-xl font-bold me-2 px-5 py-2.5 border border-borderbase rounded-full dark:bg-cardbase dark:text-base hover:bg-textbase hover:text-base">All
            categories</button>
        <button type="button"
            class="bg-cardbase text-base text-xl font-bold me-2 px-5 py-2.5 border border-borderbase rounded-full dark:bg-cardbase dark:text-base hover:bg-textbase hover:text-base">Submited</button>
        <button type="button"
            class="bg-cardbase text-base text-xl font-bold me-2 px-5 py-2.5 border border-borderbase rounded-full dark:bg-cardbase dark:text-base hover:bg-textbase hover:text-base">Under
            review</button>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img class="image" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            <div class="overlay">
                <div class="button-container">
                    <button class="center-button hover:bg-textbase hover:text-base">Details</button>
                </div>
                <div class="card-body text-base">
                    <h2 class="card-title">Judul Portofolio/Project</h2>
                    <p>Deskripsi</p>
                </div>
            </div>
        </div>
</section>
