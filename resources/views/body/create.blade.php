<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>

    <div class=" p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Přidání hodnot těla </h2>
                <p class="text-gray-500 mb-6">Přidej trénink s hodnotama</p>
                <form method="post" action="{{url('create-stats2')}}">
                    @csrf
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="content-center">
                                <img  src="https://cdn-icons-png.flaticon.com/512/1647/1647241.png" class="block h-12 w-auto" >
                            </div>
                            <div class="lg:col-span-3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-1">
                                        <label for="full_name">Výška</label>
                                        <input type="number" name="height" id="height" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm"/>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="email">Váha</label>
                                        <input type="number" name="weight" id="weight" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="kg" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="address">Tělesný tuk</label>
                                        <input type="number" name="bodyfat" id="bodyfat" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="%" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Biceps pravý</label>
                                        <input type="number" name="biceps_r" id="biceps_r" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Biceps levý</label>
                                        <input type="number" name="biceps_l" id="biceps_l" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Stehno pravý</label>
                                        <input type="number" name="thigh_r" id="thigh_r" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Stehno levý</label>
                                        <input type="number" name="thigh_l" id="thigh_l" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Lýtko pravý</label>
                                        <input type="number" name="calf_r" id="calf_r" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Lýtko levý</label>
                                        <input type="number" name="calf_l" id="calf_l" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>
                                    <div class="md:col-span-1">
                                        <label for="city">Hrudník</label>
                                        <input type="number" name="chest" id="chest" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">Boky</label>
                                        <input type="number" name="hip" id="hip" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>
                                    <div class="md:col-span-1">
                                        <label for="city">Krk</label>
                                        <input type="number" name="neck" id="neck" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>
                                    <div class="md:col-span-1">
                                        <label for="city">Datum měření</label>
                                        <input type="date" name="mesureDate" id="mesureDate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Přidat</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <a href="https://www.buymeacoffee.com/sammurder" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
                <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
            </a>
        </div>
    </div>

</x-app-layout>
