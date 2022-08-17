<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title> File Upload</title>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Upload Files</h2>
        <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file" id="file">
                          @error('file')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                    </div>
                </div>

                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container" mt-5 >
        <h2 class="text-centre">Files</h2>
        <div class="card-header">Files</div>
    <form action="{{url('') }}" enctype="multipart/form-data"><br>

     <div class=" col-auto">
        <button class="btn btn-primary"> Download</button>
     </div>
    </form>
    </div>



</body>
</html>
<script>

</script>
