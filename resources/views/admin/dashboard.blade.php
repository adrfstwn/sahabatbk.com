@extends('layouts.admin.app')
@section('title', 'SahabatBK.com - Admin')
@section('content')

<section class="flex-1 p-6">
    <div class="mb-6">

    </div>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="stats-card rounded-lg p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1">Total LKPD</p>
                    <h3 class="text-2xl font-bold text-gray-800">24</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <i class="ri-file-list-3-line ri-xl"></i>
                </div>
            </div>
        </div>
        <div class="stats-card rounded-lg p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1">Total Peserta</p>
                    <h3 class="text-2xl font-bold text-gray-800">156</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <i class="ri-user-line ri-xl"></i>
                </div>
            </div>
        </div>
        <div class="stats-card rounded-lg p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1">Soal Aktif</p>
                    <h3 class="text-2xl font-bold text-gray-800">89</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <i class="ri-question-answer-line ri-xl"></i>
                </div>
            </div>
        </div>
        <div class="stats-card rounded-lg p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1">Pengerjaan</p>
                    <h3 class="text-2xl font-bold text-gray-800">278</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <i class="ri-file-chart-line ri-xl"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Statistik Pengerjaan LKPD</h2>
                <select class="text-sm border border-gray-300 rounded-button px-3 py-2">
                    <option>7 Hari Terakhir</option>
                    <option>30 Hari Terakhir</option>
                    <option>3 Bulan Terakhir</option>
                </select>
            </div>
            <div id="completionChart" class="w-full h-[300px]"></div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Distribusi LKPD per Kelas</h2>
            </div>
            <div id="distributionChart" class="w-full h-[300px]"></div>
        </div>
    </div>
    <!-- Recent LKPD Section -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">Data LKPD Terbaru</h2>
            <div class="flex space-x-2">
                <button
                    class="bg-primary text-white px-4 py-2 rounded-button flex items-center !rounded-button whitespace-nowrap">
                    <i class="ri-add-line mr-2"></i> Tambah LKPD
                </button>
                <div class="relative">
                    <input type="text" placeholder="Cari LKPD..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    <div
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3 text-left">Judul LKPD</th>
                        <th class="px-4 py-3 text-left">Kelas</th>
                        <th class="px-4 py-3 text-left">Jumlah Soal</th>
                        <th class="px-4 py-3 text-left">Tanggal Dibuat</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">LKPD-001</td>
                        <td class="px-4 py-3">Lembar Kerja Fotosintesis</td>
                        <td class="px-4 py-3">Kelas 5</td>
                        <td class="px-4 py-3">15</td>
                        <td class="px-4 py-3">10 Mei 2025</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Aktif</span></td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b bg-[#EDF6F9] hover:bg-gray-50">
                        <td class="px-4 py-3">LKPD-002</td>
                        <td class="px-4 py-3">Lembar Kerja Tata Surya</td>
                        <td class="px-4 py-3">Kelas 6</td>
                        <td class="px-4 py-3">12</td>
                        <td class="px-4 py-3">8 Mei 2025</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Aktif</span></td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">LKPD-003</td>
                        <td class="px-4 py-3">Lembar Kerja Relativitas</td>
                        <td class="px-4 py-3">Kelas 9</td>
                        <td class="px-4 py-3">20</td>
                        <td class="px-4 py-3">5 Mei 2025</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Draft</span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b bg-[#EDF6F9] hover:bg-gray-50">
                        <td class="px-4 py-3">LKPD-004</td>
                        <td class="px-4 py-3">Lembar Kerja Ibu Kota Indonesia</td>
                        <td class="px-4 py-3">Kelas 4</td>
                        <td class="px-4 py-3">10</td>
                        <td class="px-4 py-3">3 Mei 2025</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Aktif</span></td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">LKPD-005</td>
                        <td class="px-4 py-3">Lembar Kerja Struktur Bumi</td>
                        <td class="px-4 py-3">Kelas 5</td>
                        <td class="px-4 py-3">18</td>
                        <td class="px-4 py-3">1 Mei 2025</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Nonaktif</span></td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-[#68D2E8] text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button
                                    class="w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-80">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center mt-6">
            <div class="text-sm text-gray-600">
                Menampilkan 1-5 dari 24 LKPD
            </div>
            <div class="flex space-x-1">
                <button
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300 bg-primary text-white">
                    1
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                    2
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                    3
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                    <i class="ri-arrow-right-s-line"></i>
                </button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const completionChart = echarts.init(document.getElementById('completionChart'));
            const completionOption = {
                animation: false,
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    borderColor: '#eee',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                grid: {
                    top: '10px',
                    right: '10px',
                    bottom: '20px',
                    left: '40px',
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                    axisLine: {
                        lineStyle: {
                            color: '#e5e7eb'
                        }
                    },
                    axisLabel: {
                        color: '#1f2937'
                    }
                },
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show: false
                    },
                    axisLabel: {
                        color: '#1f2937'
                    },
                    splitLine: {
                        lineStyle: {
                            color: '#e5e7eb'
                        }
                    }
                },
                series: [{
                    data: [45, 32, 65, 42, 38, 55, 35],
                    type: 'line',
                    smooth: true,
                    symbolSize: 0,
                    lineStyle: {
                        color: '#03AED2',
                        width: 3
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: 'rgba(3, 174, 210, 0.3)'
                        }, {
                            offset: 1,
                            color: 'rgba(3, 174, 210, 0.1)'
                        }])
                    }
                }]
            };
            completionChart.setOption(completionOption);
            const distributionChart = echarts.init(document.getElementById('distributionChart'));
            const distributionOption = {
                animation: false,
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    borderColor: '#eee',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                series: [{
                    type: 'pie',
                    radius: ['40%', '70%'],
                    center: ['50%', '50%'],
                    data: [
                        { value: 35, name: 'Kelas 4' },
                        { value: 30, name: 'Kelas 5' },
                        { value: 25, name: 'Kelas 6' },
                        { value: 10, name: 'Kelas 9' }
                    ],
                    label: {
                        color: '#1f2937'
                    },
                    itemStyle: {
                        borderRadius: 8,
                        borderColor: '#fff',
                        borderWidth: 2
                    },
                    color: ['rgba(87, 181, 231, 1)', 'rgba(141, 211, 199, 1)', 'rgba(251, 191, 114, 1)', 'rgba(252, 141, 98, 1)']
                }]
            };
            distributionChart.setOption(distributionOption);
            window.addEventListener('resize', function () {
                completionChart.resize();
                distributionChart.resize();
            });
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('aside');
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
        });
    </script>
@endpush