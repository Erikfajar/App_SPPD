<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>





<script>
    //Grafik Jumlah SPPD
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // sesuaikan dengan jenis chart yang Anda inginkan
        data: {
            labels: <?= json_encode(array_keys($chartData)) ?>,
            datasets: [{
                label: 'Data SPPD Per-Bulan',
                data: <?= json_encode(array_values($chartData)) ?>,
                backgroundColor: 'rgba(0, 0, 255, 0.7)', // Ganti warna background menjadi biru
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    display: false
                }
            }
        }
    });

    // Grafik jumlah pegawai
    var dataGrafikPegawai = {!! json_encode($dataGrafikPegawai) !!};
    var labels = {!! json_encode($labels) !!};
    var backgroundColor = {!! json_encode($backgroundColor) !!};

    var ctx = document.getElementById('grafikPegawai').getContext('2d');
    var donutChart = new Chart(ctx, {
        type: 'bar', // Tipe grafik Donut
        data: {
            labels: labels,
            datasets: [{
                data: dataGrafikPegawai,
                // backgroundColor: backgroundColor,
                backgroundColor: 'rgba(144, 238, 144, 1)', // Warna hijau muda untuk isi diagram batang
                borderColor: 'rgba(0, 255, 0, 1)', // Warna border hijau
                borderWidth: 2, // Tidak ada border
            }]
        },
        options: {
            responsive: true,
        }
    });
    donutChart.options.plugins.legend.display = false;
</script>
