

const deviceCtx = document.getElementById('deviceCount').getContext('2d');
new Chart(deviceCtx, {
    type: 'pie',
    data: {
        labels: Object.keys(deviceCount),
        datasets: [{
            label: 'Devices Traffic',
            data: Object.values(deviceCount),
            backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(153, 102, 255, 0.2)'],
            borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 206, 86, 1)', 'rgba(153, 102, 255, 1)'],
            borderWidth: 1
        }]
    }
});

//...


const trafficCtx = document.getElementById('trafficPerHour').getContext('2d');
new Chart(trafficCtx, {
    type: 'bar',
    data: {
        labels: Array.from({length: 24}, (_, i) => i.toString().padStart(2, '0') + ':00'), // to make sure all hours are shown
        datasets: [{
            label: 'VISITORS past 24hrs',
            data: Array.from({length: 24}, (_, i) => trafficPerHour[i] || 0), // fill hours without visits with 0
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



const accessCtx = document.getElementById('accessCount').getContext('2d');
new Chart(accessCtx, {
    type: 'pie',
    
    data: {
        labels: ['Allowed Access', 'Denied Access'],
        datasets: [{
            label: '# TRAFFIC',
            data: Object.values(accessCount),
            backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
            borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
            borderWidth: 2
        }]
    }
});
