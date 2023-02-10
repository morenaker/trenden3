
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>

<div class="shadow-lg rounded-lg overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Graf váhy</div>
    <canvas class="p-10" id="chartLine"></canvas>
</div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const labels = ["Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec"];
const data = {
    labels: labels,
        datasets: [
            {
                label: "Moje váha",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [
                    @foreach($data as $body)
                        {{$body->weight}}

                        @endforeach
            ],
            },
        ],
    };

const configLineChart = {
    type: "line",
        data,
        options: {},
    };

var chartLine = new Chart(
    document.getElementById("chartLine"),
    configLineChart
);
</script>



