@include('web.chunks.header')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<style>
    .leaflet-control-attribution.leaflet-control{
        display: none !important;
    }
</style>
<div class="row mx-0">
    <div class="col-lg-12 px-0">
        <div class="input-group">
            <button class="btn btn-outline-secondary" disabled>
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="text" class="form-control py-2"
                placeholder="Search by Token / Account / Contract / Txn Hash / Block"
                aria-label="Text input with 2 dropdown buttons">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">All</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Tokens</a></li>
                <li><a class="dropdown-item" href="#">Account</a></li>
                <li><a class="dropdown-item" href="#">Contracts</a></li>
                <li><a class="dropdown-item" href="#">Txn Hashes</a></li>
                <li><a class="dropdown-item" href="#">Blocks</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row mx-0 mt-3">
    <div class="col-lg-12 px-0">
        <h4 class="my-4">Nodes </h4>
        <div class="card rounded-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="fw-bold">7,970</h5>
                        <p class="font-13 text-muted">Nodes</p>
                    </div>
                    <div class="col-6">
                        <h5 class="fw-bold">80</h5>
                        <p class="font-13 text-muted">Countries / Regions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-lg-12 px-0">
        <h4 class="my-4">Distribution </h4>
        <div class="card rounded-3">
            <div class="card-body">
                <div id="map" style="height: 500px; width: 100%;"></div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-lg-12 px-0">
        <div class="my-4">
            <h4>Nodes Ranking </h4>
            <p class="font-13 text-muted">Ranked by country and region</p>
        </div>
        <div class="card rounded-3">
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            series: [{
                data: [44, 55, 41, 64, 22, 43, 21, 55, 41, 64, 22, 43, 21, 55, 41, 64, 22, 43, 21,
                    20, 60
                ]
            }],
            chart: {
                type: 'bar',
                height: 430
            },
            colors: ['#05d3e6'],
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        position: 'top',
                    },
                }
            },
            dataLabels: {
                enabled: true,
                offsetX: -6,
                style: {
                    fontSize: '12px',
                    colors: ['#fff']
                }
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['#fff']
            },
            tooltip: {
                shared: true,
                intersect: false
            },
            xaxis: {
                categories: ['United States', 'Ireland', 'China', 'Germeny', 'Singapore', 'Hong Kong',
                    'Taiwan', 'Russia', 'Japan', 'Finland', 'United Kingdom', 'France', 'Netherlands',
                    'Iran', 'India', 'Finland', 'South Korea', 'Australia', 'Poland', 'Ukrain', 'Others'
                ],
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var map = L.map('map').setView([20, 0], 2); // Centered globally with zoom level 2

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Country coordinates (latitude, longitude)
        var countries = [{
                name: 'United States',
                coords: [37.0902, -95.7129]
            },
            {
                name: 'Ireland',
                coords: [53.4129, -8.2439]
            },
            {
                name: 'China',
                coords: [35.8617, 104.1954]
            },
            {
                name: 'Germany',
                coords: [51.1657, 10.4515]
            },
            {
                name: 'Singapore',
                coords: [1.3521, 103.8198]
            },
            {
                name: 'Hong Kong',
                coords: [22.3193, 114.1694]
            },
            {
                name: 'Taiwan',
                coords: [23.6978, 120.9605]
            },
            {
                name: 'Russia',
                coords: [61.5240, 105.3188]
            },
            {
                name: 'Japan',
                coords: [36.2048, 138.2529]
            },
            {
                name: 'Finland',
                coords: [61.9241, 25.7482]
            },
            {
                name: 'United Kingdom',
                coords: [55.3781, -3.4360]
            },
            {
                name: 'France',
                coords: [46.6034, 1.8883]
            },
            {
                name: 'Netherlands',
                coords: [52.3676, 4.9041]
            },
            {
                name: 'Iran',
                coords: [32.4279, 53.6880]
            },
            {
                name: 'India',
                coords: [20.5937, 78.9629]
            },
            {
                name: 'South Korea',
                coords: [35.9078, 127.7669]
            },
            {
                name: 'Australia',
                coords: [-25.2744, 133.7751]
            },
            {
                name: 'Poland',
                coords: [51.9194, 19.1451]
            },
            {
                name: 'Ukraine',
                coords: [48.3794, 31.1656]
            }
        ];

        // Add markers for each country
        countries.forEach(country => {
            L.marker(country.coords)
                .addTo(map)
                .bindPopup(`<b>${country.name}</b>`)
                .openPopup();
        });
    });
</script>

@include('web.chunks.footer')
