@extends("layouts.admin_layout")

@section("content")

<h3 class="title">Dashboard</h3>

<div class="two_col_data">
    <div class="left_col">
        <div class="four_cards">
            <div class="statistic_card">
                <i class="fa-solid fa-user"></i>
                <div class="statistic_info">
                    <h3>{{ $users_total }}</h3>
                    <span>Total Voters</span>
                </div>
            </div>
            <div class="statistic_card">
                <i class="fa-solid fa-user-tie"></i>
                <div class="statistic_info">
                    <h3>{{ $candidates_total }}</h3>
                    <span>Total Candidates</span>
                </div>
            </div>
            <div class="statistic_card">
                <i class="fa-solid fa-square-check"></i>
                <div class="statistic_info">
                    <h3>{{ $voted_users }}</h3>
                    <span>Voted Users</span>
                </div>
            </div>
        </div>
        <div id="live_voting_result">
        </div>
    </div>
    <div class="right_col">
        <div class="statistic_card">
            <h3>Live Votes Updates</h3>
            <p>Rwanda</p>
        </div>
        <div id="leading_donut"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript">

    // Line chart to represent Votes over time.
    var options = {
        series: [
        {
        name: "John",
        data: [28, 29, 33, 36, 32, 32, 33]
        },
        {
        name: "Peter",
        data: [12, 11, 14, 18, 17, 13, 13]
        }
    ],
        chart: {
        height: 400,
        type: 'line',
        dropShadow: {
        enabled: true,
        color: '#000',
        top: 18,
        left: 7,
        blur: 10,
        opacity: 0.2
        },
        toolbar: {
        show: false
        }
    },
    colors: ['#77B6EA', '#545454'],
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: 'smooth'
    },
    title: {
        text: 'Candidates and Votes Line Charts',
        align: 'center',
        marginTop:"20px"
    },
    grid: {
        borderColor: '#e7e7e7',
        row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
        },
    },
    markers: {
        size: 1
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
    },
    yaxis: {
        title: {
        text: 'Votes'
        },
        min: 5,
        max: 40
    },
    legend: {}
    };
    var chart = new ApexCharts(document.querySelector("#live_voting_result"), options);
    chart.render();


    // Donut chart to represent Voting
    var donut_options = {
        series: [44, 55, 13, 43, 22],
        chart: {
            width: "100%",
            height: 400,
            type: 'pie',
        },
        labels: ['John', 'Peter', 'Alice', 'Queen', 'Saveur'],
        responsive: [{
        breakpoint: 480,
        options: {
            chart: {
            width: 200
            },
            legend: {
            position: 'bottom'
            }
        }
        }]
    };
    var donut_chart = new ApexCharts(document.querySelector("#leading_donut"), donut_options);
    donut_chart.render();
    
    </script>

@endsection