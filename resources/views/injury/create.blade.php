<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>

    <div class=" p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Přidání problému</h2>
                <form method="post" action="{{url('create-injury')}}">
                    @csrf
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="content-center">
                                <img  src="https://cdn-icons-png.flaticon.com/512/1647/1647241.png" class="block h-12 w-auto" >
                            </div>
                            <div class="lg:col-span-3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="ill" checked type="radio" value="ill" name="problem" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                        <label for="ill" class="w-full py-4 ml-2 text-sm font-medium ">Nemoc</label>
                                    </div>
                                    <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="injury" type="radio" value="injury" name="problem" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                        <label for="injury" class="w-full py-4 ml-2 text-sm font-medium ">Zranění</label>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="email">Pojmenování</label>
                                        <input type="text" name="problemName" id="problemName" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="zlomenina,..." />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="email">Popis</label>
                                        <input type="text" name="desc" id="desc" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="popis daného problému, jak se cítíte, jak se to stalo ..." />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="city">délka v dnech problému</label>
                                        <input type="number" name="length" id="length" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="dny" />
                                    </div>
                                    <div class="md:col-span-1">
                                        <label for="city">Začátek problému</label>
                                        <input type="date" name="problemDate" id="problemDate" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
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
