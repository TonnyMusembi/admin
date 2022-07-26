<!DOCTYPE html>
<html>
    <head>
        <title>Datatable</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" rel="stylesheet">
    </head>
    <body class="bg-color">
        <div class="container">
            <a class="btn btn-success" href="{{ route('qrcode.index')}}" id="createNewProduct"> Create New User</a> <br>
            <div class="row">
                <h1 class="mb-3 text-center"> Users</h1>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="container -mt-5">
            <form action="{{ url('')}}" method="POST" enctype="">

            </form>
            <div class="container mt-5">
            <a class="btn btn-primary" href="{{ route('qrcode.index')}}" id="createNewProduct">Next</a> <br>
            </div>
            <div class="container mt-5">
                {{-- <a  class="btn btn-success"  href="{{}}"></a> --}}
            </div>
        </div>
        <div class="modal fade" id="ajaxModel" aria-hidden="true"

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
               ajax:"{{route('data')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: true, searchable: true},
                ]
            });
        });
        </script>
    </body>
</html>
