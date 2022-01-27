var trafficchart = document.getElementById("trafficflow");
var saleschart = document.getElementById("sales");
var populationchart = document.getElementById("population");



// new
var myChart1 = new Chart(trafficchart, {
type: 'line',
data: {
    labels: labelCountry,
    datasets: [{
        data: cases,
        backgroundColor: "rgba(48, 164, 255, 0.2)",
        borderColor: "rgba(48, 164, 255, 0.8)",
        fill: false,
        borderWidth: 1
    }]
},
options: {
    animation: {
        duration: 2000,
        easing: 'easeOutQuart',
    },
    plugins: {
        legend: {
            display: false,
            position: 'right',
        },
        title: {
            display: true,
            text: 'Number of Infections',
            position: 'left',
        },
    },
}
});

// new
var myChart2 = new Chart(saleschart, {
type: 'bar',
data: {
    labels: labelCountry,
    datasets: [{
            label: 'Death',
            data: death,
            backgroundColor: "#ec4561",
            borderColor: "#ec4561",
            borderWidth: 1,
    }]
},
options: {
    animation: {
        duration: 2000,
        easing: 'easeOutQuart',
    },
    plugins: {
        legend: {
            display: false,
            position: 'top',
        },
        title: {
            display: true,
            text: 'Number of Death',
            position: 'left',
        },
    },
}
});

var myChart3 = new Chart(populationchart, {
type: 'line',
data: {
    labels: labelCountry,
    datasets: [{
        data: population,
        backgroundColor: "rgba(48, 164, 255, 0.2)",
        borderColor: "#6da252",
        fill: false,
        borderWidth: 1
    }]
},
options: {
    animation: {
        duration: 2000,
        easing: 'easeOutQuart',
    },
    plugins: {
        legend: {
            display: false,
            position: 'right',
        },
        title: {
            display: true,
            text: 'Number of Persons',
            position: 'left',
        },
    },
}
});