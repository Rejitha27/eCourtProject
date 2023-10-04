@extends('Layouts.admin_profile_theme')
@section('content')



<!DOCTYPE html>
<html>
<head>
    <title>ApexCharts Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.26.1/dist/apexcharts.min.css">
</head>
<body>

    <div id="chart"></div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.1/dist/apexcharts.min.js"></script>

    <script>
        var options = {
            chart: {
                type: 'pie',
                height: 250,
            },
            series: [
                @foreach($data as $item)
                    {{ $item->count }},
                @endforeach
            ],
            labels: [
                @foreach($data as $item)
                    "{{ $item->case_type }}",
                @endforeach
            ],
            title: {
        text: 'CaseType Statistics', // The heading or title for your pie chart
        align: 'center', // Alignment of the title (left, center, right)
        margin: 15, // Margin around the title
        offsetX: 0, // Horizontal offset of the title
        offsetY: 10, // Vertical offset of the title
        floating: false, // Whether the title should float above the chart
        style: {
            fontSize: '18px', // Font size of the title
            fontWeight: 'bold', // Font weight of the title
            fontFamily: 'Arial', // Font family of the title
            color: '#FF0000' // Font color of the title
        }
    }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>

</body>
</html>



@endsection
