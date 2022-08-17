<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 ChartJS Chart Example - ItSolutionStuff.com</title>
</head>

<body>
    <h1>Laravel 9 ChartJS Chart Example - ItSolutionStuff.com</h1>
    <canvas id="myChart" height="100px"></canvas>


    <form action="uploader.php" method="post" enctype="multipart/form-data">
        Select File:
        <input type="file" name="fileToUpload/">
        <input type="submit" value=" Upload Image" name="submit">

    </form>
    @extends('layout')
    @section('content')
    <h1>Register</h1>
    <form action="{{route('')}}" method="POST">
        @csrf
    <div>
        <input type="text" >

     </div>
    </form>

    @endsection
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>
</html>
