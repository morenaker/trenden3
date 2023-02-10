<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>
    <div class="bg-white p-8 rounded-md w-full">

        <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Aktivita
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Datum
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Popis
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Kcal
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Náročnost
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($data as $training)
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            @if($training->type=="box")
                                                <!--https://www.flaticon.com/free-icon/boxing-glove_1545724?related_id=1545724&origin=search-->
                                                <img class="w-full h-full "
                                                     src="https://cdn-icons-png.flaticon.com/512/1545/1545724.png"
                                                     alt="" />
                                            @elseif($training->type=="běh")
                                                <!--https://www.flaticon.com/free-icon/running_1248195-->
                                                <img class="w-full h-full "
                                                     src="https://cdn-icons-png.flaticon.com/512/1248/1248195.png"
                                                     alt="" />
                                            @elseif($training->type=="plavání")
                                                <!--https://www.flaticon.com/free-icon/swim_8968459-->
                                                <img class="w-full h-full "
                                                     src="https://cdn-icons-png.flaticon.com/512/8968/8968459.png"
                                                     alt="" />
                                            @elseif($training->type=="posilování")
                                                <!--https://www.flaticon.com/free-icon/gym_932019-->
                                                <img class="w-full h-full "
                                                     src="https://cdn-icons-png.flaticon.com/512/932/932019.png"
                                                     alt="" />
                                            @elseif($training->type=="kolo")
                                                <!--https://www.flaticon.com/free-icon/bike_7702552-->
                                                <img class="w-full h-full "
                                                     src="https://cdn-icons-png.flaticon.com/512/7702/7702552.png"
                                                     alt="" />
                                            @else
                                                <!--https://www.flaticon.com/free-icon/profits_892172?term=graph&page=1&position=5&page=1&position=5&related_id=892172&origin=search-->
                                                <img class="w-full h-full"
                                                     src="https://cdn-icons-png.flaticon.com/512/892/892172.png"
                                                     alt="" />
                                            @endif
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <div>{{$training->type}}</div>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <div>{{$training->date}}</div>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <div>{{$training->desc}}</div>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <div>{{$training->kcal}}</div>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">

                                        <div>{{$training->intens}}</div>

                                    </span>
									</span>
                                </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
