<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('lineChart').getContext('2d');
    var labels = @json($labels);
    var values = @json($values);

    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Data Jumlah',
                data: values,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                x: {
                    type: 'time',
                    time: {
                        unit: 'day', // Atur unit waktu yang sesuai (contoh: 'month', 'year', dll.)
                        displayFormats: {
                            day: 'YYYY-MM-DD' // Format tanggal yang sesuai
                        }
                    },
                    title: {
                        display: true,
                        text: 'Tanggal'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Data'
                    }
                }
            }
        }
    });
</script>