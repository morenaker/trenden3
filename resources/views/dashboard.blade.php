<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>


    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                Sport
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                Sekce sport
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <x-jet-dropdown-link href="training-index">
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <!--https://www.flaticon.com/free-icon/sport_1198416?related_id=1198314&origin=search -->
                    <img class="object-center object-scale-down  h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/1198/1198416.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Detail</p>
                    <p class="text-base text-gray-400 font-normal">Detail Treninků</p>
                </div>
            </div>
            </x-jet-dropdown-link>

            <x-jet-dropdown-link href="training-create">
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <!--https://www.flaticon.com/free-icon/plus_3303893?term=plus&page=1&position=11&page=1&position=11&related_id=3303893&origin=search-->
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/1828/1828926.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Přidání</p>
                    <p class="text-base text-gray-400 font-normal">Přidíní tréninku</p>
                </div>
            </div>
            </x-jet-dropdown-link>
            <x-jet-dropdown-link href="training-calendar">
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <!--https://www.flaticon.com/free-icon/gym_4074728?related_id=4074728&origin=search-->
                    <img class="object-center object-scale-down h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/4074/4074728.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Plán</p>
                    <p class="text-base text-gray-400 font-normal">Plán tréninků</p>
                </div>
            </div>
            </x-jet-dropdown-link>
            <!--
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-scale-down  h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/1198/1198416.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2"></p>
                    <p class="text-base text-gray-400 font-normal"></p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/1828/1828926.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2"></p>
                    <p class="text-base text-gray-400 font-normal"></p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-scale-down h-36 w-36" src="https://cdn-icons-png.flaticon.com/512/4074/4074728.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2"></p>
                    <p class="text-base text-gray-400 font-normal"></p>
                </div>
            </div>

        -->
        </div>
        <a href="https://www.buymeacoffee.com/sammurder" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
            <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
        </a>
    </section>
</x-app-layout>
