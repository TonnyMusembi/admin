<!DOCTYPE html>
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
</html
