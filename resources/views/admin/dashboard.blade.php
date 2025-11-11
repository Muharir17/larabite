@extends('layouts.admin')

@section('content')

<!-- Top Stats Cards -->
<div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-2 lg:grid-cols-4">
    <!-- Card 1 - Total Pajak -->
    <div class="p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <p class="text-xs font-medium text-gray-500 dark:text-gray-400 mb-1">Total Pajak November 2025</p>
        <h3 class="text-xl font-bold text-red-600 dark:text-red-500">Rp29.942.158.800</h3>
    </div>

    <!-- Card 2 - Total Opsen -->
    <div class="p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <p class="text-xs font-medium text-gray-500 dark:text-gray-400 mb-1">Total Opsen November 2025</p>
        <h3 class="text-xl font-bold text-red-600 dark:text-red-500">Rp19.810.725.300</h3>
    </div>

    <!-- Card 3 - Total SWDKLLJ -->
    <div class="p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <p class="text-xs font-medium text-gray-500 dark:text-gray-400 mb-1">Total SWDKLLJ November 2025</p>
        <h3 class="text-xl font-bold text-red-600 dark:text-red-500">Rp3.459.720.100</h3>
    </div>

    <!-- Card 4 - Total Pendapatan -->
    <div class="p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <p class="text-xs font-medium text-gray-500 dark:text-gray-400 mb-1">Total Pendapatan November 2025</p>
        <h3 class="text-xl font-bold text-red-600 dark:text-red-500">Rp53.222.604.000</h3>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-2">
    <!-- Pendapatan Harian Chart -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-base font-semibold text-gray-900 dark:text-white">Pendapatan Harian November 2025</h2>
            <span class="text-xs text-gray-500 dark:text-gray-400">Rp10.000.000.000</span>
        </div>
        <div id="area-chart" class="h-64"></div>
    </div>

    <!-- Pendapatan Bulanan Chart -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-base font-semibold text-gray-900 dark:text-white">Pendapatan Bulanan Tahun 2025</h2>
            <span class="text-xs text-gray-500 dark:text-gray-400">Rp120.000.000.000</span>
        </div>
        <div id="bar-chart" class="h-64"></div>
    </div>
</div>

<!-- Vehicle Statistics -->
<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-6">
    <h2 class="mb-4 text-base font-semibold text-gray-900 dark:text-white">Jumlah Kendaraan Berdasarkan Group Jenis</h2>
    
    <!-- First Row -->
    <div class="grid grid-cols-2 gap-4 mb-4 md:grid-cols-3 lg:grid-cols-6">
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">TRUCK</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">9.155</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">SPKRS</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">6.385</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">SPM</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">2.260.390</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">SEDAN</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">8.196</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">RANSUS</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">106</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">PRIME MOVER</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">0</p>
        </div>
    </div>

    <!-- Second Row -->
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6">
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">PICK UP</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">91.747</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">MINIBUS</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">231.241</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">MICROBUS</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">3.930</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">LIGHT TRUCK</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">35.286</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">JEEP</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">25.995</p>
        </div>
        <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <p class="text-xs text-gray-600 dark:text-gray-400 mb-1">BUS</p>
            <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-500">171</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
// Area Chart Configuration
const areaChartOptions = {
    series: [{
        name: 'Pendapatan',
        data: [4000000000, 5500000000, 8000000000, 6500000000, 9000000000, 7500000000, 8500000000, 6000000000]
    }],
    chart: {
        type: 'area',
        height: 256,
        toolbar: { show: false },
        zoom: { enabled: false }
    },
    colors: ['#FFA500'],
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.3,
        }
    },
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth', width: 2 },
    xaxis: {
        categories: ['Nov 1', 'Nov 2', 'Nov 3', 'Nov 5', 'Nov 7', 'Nov 8'],
        labels: {
            style: {
                colors: '#9ca3af',
                fontSize: '12px'
            }
        }
    },
    yaxis: {
        labels: {
            formatter: function(value) {
                return 'Rp' + (value / 1000000000).toFixed(1) + 'M';
            },
            style: {
                colors: '#9ca3af',
                fontSize: '12px'
            }
        }
    },
    grid: {
        borderColor: '#e5e7eb',
        strokeDashArray: 4
    },
    tooltip: {
        y: {
            formatter: function(value) {
                return 'Rp' + value.toLocaleString('id-ID');
            }
        }
    }
};

// Bar Chart Configuration
const barChartOptions = {
    series: [{
        name: 'Pendapatan',
        data: [95000000000, 88000000000, 102000000000, 98000000000, 105000000000, 110000000000, 115000000000, 108000000000, 112000000000, 118000000000, 95000000000, 120000000000]
    }],
    chart: {
        type: 'bar',
        height: 256,
        toolbar: { show: false }
    },
    colors: ['#FFA500', '#FFB84D', '#FFC266', '#FFD699', '#FFE5B3', '#FFF2CC', '#FFE5B3', '#FFD699', '#FFC266', '#FFB84D', '#FFA500', '#FF9500'],
    plotOptions: {
        bar: {
            borderRadius: 4,
            columnWidth: '70%'
        }
    },
    dataLabels: { enabled: false },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        labels: {
            style: {
                colors: '#9ca3af',
                fontSize: '12px'
            }
        }
    },
    yaxis: {
        labels: {
            formatter: function(value) {
                return 'Rp' + (value / 1000000000).toFixed(0) + 'M';
            },
            style: {
                colors: '#9ca3af',
                fontSize: '12px'
            }
        }
    },
    grid: {
        borderColor: '#e5e7eb',
        strokeDashArray: 4
    },
    tooltip: {
        y: {
            formatter: function(value) {
                return 'Rp' + value.toLocaleString('id-ID');
            }
        }
    }
};

// Render Charts
if (document.getElementById('area-chart')) {
    const areaChart = new ApexCharts(document.getElementById('area-chart'), areaChartOptions);
    areaChart.render();
}

if (document.getElementById('bar-chart')) {
    const barChart = new ApexCharts(document.getElementById('bar-chart'), barChartOptions);
    barChart.render();
}
</script>
@endsection
