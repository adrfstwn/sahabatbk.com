@extends('layouts.admin.app')
@section('title', 'Dashboard - SahabatBK.com Admin')
@section('content')

<div class="p-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="stats-card rounded-xl p-6 shadow-sm border">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1 text-sm font-medium">Total LKPD</p>
                    <h3 class="text-3xl font-bold text-gray-900">24</h3>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="ri-arrow-up-line"></i> +2 bulan ini
                    </p>
                </div>
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white shadow-lg">
                    <i class="ri-file-list-3-line text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-sm border">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1 text-sm font-medium">Total Peserta</p>
                    <h3 class="text-3xl font-bold text-gray-900">156</h3>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="ri-arrow-up-line"></i> +12 minggu ini
                    </p>
                </div>
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white shadow-lg">
                    <i class="ri-group-line text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-sm border">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1 text-sm font-medium">Soal Aktif</p>
                    <h3 class="text-3xl font-bold text-gray-900">89</h3>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="ri-arrow-up-line"></i> +5 hari ini
                    </p>
                </div>
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-white shadow-lg">
                    <i class="ri-question-answer-line text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-sm border">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 mb-1 text-sm font-medium">Pengerjaan</p>
                    <h3 class="text-3xl font-bold text-gray-900">278</h3>
                    <p class="text-xs text-orange-600 mt-1">
                        <i class="ri-arrow-up-line"></i> +18 hari ini
                    </p>
                </div>
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white shadow-lg">
                    <i class="ri-file-chart-line text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="table-container p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Statistik Pengerjaan LKPD</h2>
                    <p class="text-sm text-gray-600">Aktivitas pengerjaan dalam periode terakhir</p>
                </div>
                <select class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-primary focus:border-transparent">
                    <option>7 Hari Terakhir</option>
                    <option>30 Hari Terakhir</option>
                    <option>3 Bulan Terakhir</option>
                </select>
            </div>
            <div id="completionChart" class="w-full h-[300px]"></div>
        </div>
        
        <div class="table-container p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Distribusi LKPD per Kelas</h2>
                    <p class="text-sm text-gray-600">Sebaran LKPD berdasarkan tingkat kelas</p>
                </div>
            </div>
            <div id="distributionChart" class="w-full h-[300px]"></div>
        </div>
    </div>
    <!-- Recent LKPD Section -->
    <div class="table-container p-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-gray-900">Data LKPD Terbaru</h2>
                <p class="text-sm text-gray-600">Daftar LKPD yang baru dibuat atau diperbarui</p>
            </div>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3 w-full sm:w-auto">
                <button class="bg-primary text-white px-4 py-2 rounded-lg flex items-center justify-center whitespace-nowrap hover:bg-primary/90 transition-colors">
                    <i class="ri-add-line mr-2"></i> Tambah LKPD
                </button>
                <div class="relative">
                    <input type="text" placeholder="Cari LKPD..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent w-full sm:w-64">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-primary to-[#68D2E8] text-white">
                        <th class="px-6 py-4 text-left font-semibold">ID</th>
                        <th class="px-6 py-4 text-left font-semibold">Judul LKPD</th>
                        <th class="px-6 py-4 text-left font-semibold">Kelas</th>
                        <th class="px-6 py-4 text-left font-semibold">Jumlah Soal</th>
                        <th class="px-6 py-4 text-left font-semibold">Tanggal Dibuat</th>
                        <th class="px-6 py-4 text-left font-semibold">Status</th>
                        <th class="px-6 py-4 text-left font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">LKPD-001</td>
                        <td class="px-6 py-4 text-gray-700">Lembar Kerja Fotosintesis</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Kelas 5
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-700">15</td>
                        <td class="px-6 py-4 text-gray-700">10 Mei 2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="ri-check-line mr-1"></i>Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="w-9 h-9 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors" title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-amber-500 text-white rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-blue-50/50 hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">LKPD-002</td>
                        <td class="px-6 py-4 text-gray-700">Lembar Kerja Tata Surya</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Kelas 6
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-700">12</td>
                        <td class="px-6 py-4 text-gray-700">8 Mei 2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="ri-check-line mr-1"></i>Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="w-9 h-9 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors" title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-amber-500 text-white rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">LKPD-003</td>
                        <td class="px-6 py-4 text-gray-700">Lembar Kerja Relativitas</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                Kelas 9
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-700">20</td>
                        <td class="px-6 py-4 text-gray-700">5 Mei 2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <i class="ri-draft-line mr-1"></i>Draft
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="w-9 h-9 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors" title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-amber-500 text-white rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-blue-50/50 hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">LKPD-004</td>
                        <td class="px-6 py-4 text-gray-700">Lembar Kerja Ibu Kota Indonesia</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Kelas 4
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-700">10</td>
                        <td class="px-6 py-4 text-gray-700">3 Mei 2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="ri-check-line mr-1"></i>Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="w-9 h-9 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors" title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-amber-500 text-white rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">LKPD-005</td>
                        <td class="px-6 py-4 text-gray-700">Lembar Kerja Struktur Bumi</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Kelas 5
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-700">18</td>
                        <td class="px-6 py-4 text-gray-700">1 Mei 2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <i class="ri-close-line mr-1"></i>Nonaktif
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <button class="w-9 h-9 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors" title="Lihat">
                                    <i class="ri-eye-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-amber-500 text-white rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors" title="Edit">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="w-9 h-9 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors" title="Hapus">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
            <div class="text-sm text-gray-600">
                Menampilkan 1-5 dari 24 LKPD
            </div>
            <div class="flex items-center space-x-1">
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-gray-50 transition-colors">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-300 bg-primary text-white">
                    1
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-gray-50 transition-colors">
                    2
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-gray-50 transition-colors">
                    3
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-gray-50 transition-colors">
                    <i class="ri-arrow-right-s-line"></i>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Completion Chart
            const completionChart = echarts.init(document.getElementById('completionChart'));
            const completionOption = {
                animation: true,
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    borderColor: 'rgba(3, 174, 210, 0.2)',
                    borderWidth: 1,
                    textStyle: {
                        color: '#1f2937',
                        fontSize: 14
                    },
                    axisPointer: {
                        type: 'cross',
                        lineStyle: {
                            color: '#03AED2'
                        }
                    }
                },
                grid: {
                    top: '20px',
                    right: '20px',
                    bottom: '40px',
                    left: '50px',
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
                        color: '#6b7280',
                        fontSize: 12,
                        fontWeight: 500
                    },
                    splitLine: {
                        show: false
                    }
                },
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show: false
                    },
                    axisLabel: {
                        color: '#6b7280',
                        fontSize: 12,
                        fontWeight: 500
                    },
                    splitLine: {
                        lineStyle: {
                            color: 'rgba(229, 231, 235, 0.8)',
                            type: 'dashed'
                        }
                    }
                },
                series: [{
                    name: 'Pengerjaan LKPD',
                    data: [45, 32, 65, 42, 38, 55, 35],
                    type: 'line',
                    smooth: true,
                    symbolSize: 8,
                    symbol: 'circle',
                    itemStyle: {
                        color: '#03AED2'
                    },
                    lineStyle: {
                        color: '#03AED2',
                        width: 3,
                        shadowColor: 'rgba(3, 174, 210, 0.3)',
                        shadowBlur: 8,
                        shadowOffsetY: 3
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: 'rgba(3, 174, 210, 0.3)'
                        }, {
                            offset: 1,
                            color: 'rgba(3, 174, 210, 0.05)'
                        }])
                    }
                }]
            };
            completionChart.setOption(completionOption);

            // Initialize Distribution Chart
            const distributionChart = echarts.init(document.getElementById('distributionChart'));
            const distributionOption = {
                animation: true,
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    borderColor: 'rgba(3, 174, 210, 0.2)',
                    borderWidth: 1,
                    textStyle: {
                        color: '#1f2937',
                        fontSize: 14
                    },
                    formatter: '{a} <br/>{b}: {c} ({d}%)'
                },
                legend: {
                    orient: 'horizontal',
                    bottom: 'bottom',
                    textStyle: {
                        color: '#6b7280',
                        fontSize: 12,
                        fontWeight: 500
                    }
                },
                series: [{
                    name: 'LKPD per Kelas',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    center: ['50%', '45%'],
                    avoidLabelOverlap: false,
                    data: [
                        { value: 35, name: 'Kelas 4' },
                        { value: 30, name: 'Kelas 5' },
                        { value: 25, name: 'Kelas 6' },
                        { value: 10, name: 'Kelas 9' }
                    ],
                    label: {
                        show: true,
                        position: 'outside',
                        color: '#374151',
                        fontSize: 12,
                        fontWeight: 500,
                        formatter: '{b}\n{d}%'
                    },
                    labelLine: {
                        show: true,
                        lineStyle: {
                            color: '#d1d5db'
                        }
                    },
                    itemStyle: {
                        borderRadius: 8,
                        borderColor: '#fff',
                        borderWidth: 2,
                        shadowColor: 'rgba(0, 0, 0, 0.1)',
                        shadowBlur: 10
                    },
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 20,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.3)'
                        }
                    },
                    color: [
                        new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#3b82f6'
                        }, {
                            offset: 1,
                            color: '#1d4ed8'
                        }]),
                        new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#10b981'
                        }, {
                            offset: 1,
                            color: '#047857'
                        }]),
                        new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#f59e0b'
                        }, {
                            offset: 1,
                            color: '#d97706'
                        }]),
                        new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#8b5cf6'
                        }, {
                            offset: 1,
                            color: '#7c3aed'
                        }])
                    ]
                }]
            };
            distributionChart.setOption(distributionOption);

            // Handle window resize
            window.addEventListener('resize', function () {
                completionChart.resize();
                distributionChart.resize();
            });

            // Mobile sidebar toggle functionality
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('.sidebar');
            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
        });
    </script>
@endpush