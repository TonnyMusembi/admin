<!DOCTYPE html>
<html lang=" {{}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <tit</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <h2>Import Excel</h2>
        <form action="{{ route('import')}} " method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
        </form>
    </div>
 <div class="container mt-5 text-center">
    <h1></h1>

 </div>
</body>
</html>
<script>



</script>


