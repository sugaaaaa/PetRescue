@extends('admin.adminDashboard.dashboard')

@section('content')
<div class="flex flex-wrap">
    <div class="w-full p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4 mt-4">
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Pets</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-paw text-2xl bg-[#feb1c0] p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Blogs</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $blogCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-blog text-2xl bg-[#9dcef4] p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Pet Care</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petCareCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-heart-pulse text-2xl bg-[#fce4ab] p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Users</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $userCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-users text-2xl bg-[#a7dcdd] p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Grooming</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petGroomingCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-house-medical text-2xl bg-blue-200 p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Shop</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petShopCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-basket-shopping text-2xl bg-blue-200 p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Park</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petParkCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-dog  text-2xl bg-blue-200 p-2 rounded-lg"></i>
                </div>
            </div>
            <div class="flex items-center px-10 py-5 justify-between bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <div>
                    <h1 class="text-xl font-mono font-semibold text-gray-500">Total Treatment</h1>
                    <h1 class="text-3xl font-semibold text-start">{{ $petTreatmentCount }}</h1>
                </div>
                <div>
                    <i class="fa-solid fa-shield-dog text-2xl bg-blue-200 p-2 rounded-lg"></i>
                </div>
            </div>
        </div>
        <div class="flex gap-5">
            <div class="w-full sm:w-1/2 p-4 bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <canvas id="entityChart1" width="400" height="400"></canvas>
            </div>
            <div class="w-full sm:w-1/2 p-4 bg-gray-50 rounded-lg shadow-[1px_0px_15px_0px_#cbcbcb]">
                <canvas id="entityChart2" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('entityChart1').getContext('2d');
    var entityChart1 = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['Pets', 'Blogs', 'Pet Care', 'Users'],
            datasets: [{
                label: 'Entity Distribution',
                data: [{{ $petCount }}, {{ $blogCount }}, {{ $petCareCount }}, {{ $userCount }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Entity Distribution'
            },
            legend: {
                display: true,
                position: 'right'
            }
        }
    });

    var ctx2 = document.getElementById('entityChart2').getContext('2d');
    var entityChart2 = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['PetGrooming', 'PetShop', 'PetParks', 'PetTreatment'],
            datasets: [{
                label: 'Entity Distribution',
                data: [{{ $petGroomingCount }}, {{ $petShopCount }}, {{ $petParkCount }}, {{ $petTreatmentCount }}],
                backgroundColor: [
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Entity Distribution'
            },
            legend: {
                display: true,
                position: 'right'
            }
        }
    });
</script>
@endsection
