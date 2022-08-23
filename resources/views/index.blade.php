{{-- <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Export data </title>

   <!-- CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

   <div class="container mt-5">

      <a class="btn btn-primary" href="{{ route('employees.exportcsv') }}">CSV Export</a> &nbsp;&nbsp;
      <a class="btn btn-primary" href="{{ route('employees.exportexcel') }}">Excel Export</a><br><br>

      <form method='post' action="{{ route('employees.exportbyagecsv') }}">
         @csrf
         <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="0">
         </div>

         <button type="submit" class="btn btn-success">Export</button>
      </form>
   </div>
   <div class="container mt-5">
    <div class="card-body">



    </div>
   </div>
</body>
</html --}}

<<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
    </head>
    <body>
        <div class="container">
          <br />
          INDEX PAGE
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    </body>
</html>
