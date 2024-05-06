<x-frontpage.app>

    {{-- Section About --}}
    <div class="w-full grid bg-textbase justify-center px-40">
        {{-- Header --}}
        <h1 class="text-8xl text-neutral-200 font-extrabold text-center content-center mt-20">
            Hello world !<br>
            Project Weekend !
        </h1>

        {{-- Subheader --}}
        <p class="text-xl text-center px-40 mt-5 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum, turpis vitae egestas posuere,
            ipsum libero semper enim, sed laoreet.
        </p>

        {{-- Button --}}
        <div class=" flex grid-cols-2 justify-center gap-5 mb-10">
            <div>
                <x-frontpage.components.button bgcolor="bg-textbase">
                    <p class="text-base">Click Me</p>
                </x-frontpage.components.button>
            </div>
            <div>
                <x-frontpage.components.button textcolor='text-textbase'>
                    Click Me
                </x-frontpage.components.button>
            </div>
        </div>

        {{-- Companies --}}
        <div class="grid justify-center mb-5">
            <p class="mb-3 text-center">
                Showoff your project with us!
            </p>

            <div class="flex grid-cols-4 justify-between gap-3">
                <div>
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </div>
                <div>
                    <i class="fa-brands fa-linkedin"></i>
                    LinkedIn
                </div>
                <div>
                    <i class="fa-solid fa-basketball"></i>
                    Dribbble
                </div>
                <div>
                    <i class="fa-brands fa-atlassian"></i>
                    Atlassian
                </div>
            </div>
        </div>
    </div>

    {{-- Section Discover --}}
    <div class="flex w-full bg-cardbase justify-center py-5">
        <div class="w-11/12">
            <div class="p-5">
                <h1 class="text-3xl font-bold text-neutral-200 mb-5">Discover more</h1>

                {{-- Categories --}}
                <div class="grid grid-cols-5 gap-3 justify-between border-b border-neutral-500 mb-5">
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-5">
                        Category 1
                    </div>
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-5">
                        Category 2
                    </div>
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-5">
                        Category 3
                    </div>
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-5">
                        Category 4
                    </div>
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-5">
                        Category 5
                    </div>
                </div>

                {{-- Projects --}}
                <div class="grid grid-cols-3 gap-3 justify-between">
                    {{-- Project 1 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.webp"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="w-12 h-12 mr-2">
                                <img class="object-cover rounded-lg"
                                    src="https://t3.ftcdn.net/jpg/03/91/37/12/360_F_391371227_OOPKuywmf6dqwOTsw4Dfu0iDejLKyZZC.jpg"
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 1</h3>
                                <p class="text-xs">by Team Name 3</p>
                            </div>
                        </div>
                    </div>
                    {{-- Project 2 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://ceblog.s3.amazonaws.com/wp-content/uploads/2018/08/20142436/best-homepage-23.png"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="mr-2">
                                <img class="w-12 h-12 object-cover rounded-lg"
                                    src="https://img.freepik.com/premium-vector/football-club-logo-football-club-emblem-design-template-dark-background_630259-306.jpg"
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 2</h3>
                                <p class="text-xs">by Team Name 2</p>
                            </div>
                        </div>
                    </div>
                    {{-- Project 3 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://149842033.v2.pressablecdn.com/wp-content/uploads/2018/09/kenedy-free-personal-website-templates-1000x750.jpg"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="mr-2">
                                <img class="w-12 h-12 object-cover rounded-lg"
                                    src="https://media.istockphoto.com/id/1465343359/vector/continuous-teamwork-and-human-solidarity-idea-logo.jpg?s=612x612&w=0&k=20&c=9mnZx8_cmHCu-FZiYc9AoFJ3oInPScMKGMPAg9nu19A="
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 3</h3>
                                <p class="text-xs">by Team Name 1</p>
                            </div>
                        </div>
                    </div>
                    {{-- Project 4 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://ceblog.s3.amazonaws.com/wp-content/uploads/2018/08/20142436/best-homepage-23.png"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="mr-2">
                                <img class="w-12 h-12 object-cover rounded-lg"
                                    src="https://img.freepik.com/premium-vector/football-club-logo-football-club-emblem-design-template-dark-background_630259-306.jpg"
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 4</h3>
                                <p class="text-xs">by Team Name 6</p>
                            </div>
                        </div>
                    </div>
                    {{-- Project 5 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://149842033.v2.pressablecdn.com/wp-content/uploads/2018/09/kenedy-free-personal-website-templates-1000x750.jpg"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="mr-2">
                                <img class="w-12 h-12 object-cover rounded-lg"
                                    src="https://media.istockphoto.com/id/1465343359/vector/continuous-teamwork-and-human-solidarity-idea-logo.jpg?s=612x612&w=0&k=20&c=9mnZx8_cmHCu-FZiYc9AoFJ3oInPScMKGMPAg9nu19A="
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 5</h3>
                                <p class="text-xs">by Team Name 5</p>
                            </div>
                        </div>
                    </div>
                    {{-- Project 6 --}}
                    <div class="grid justify-center bg-neutral py-2 rounded-xl mb-3 px-3">
                        <img class="w-full h-64 object-cover rounded-lg"
                            src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.webp"
                            alt="...">

                        <div class="flex grid-cols-2 mt-3">
                            <div class="w-12 h-12 mr-2">
                                <img class="object-cover rounded-lg"
                                    src="https://t3.ftcdn.net/jpg/03/91/37/12/360_F_391371227_OOPKuywmf6dqwOTsw4Dfu0iDejLKyZZC.jpg"
                                    alt="...">
                            </div>
                            <div class="grid content-center">
                                <h3 class="text-lg">Project Name 6</h3>
                                <p class="text-xs">by Team Name 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontpage.app>
