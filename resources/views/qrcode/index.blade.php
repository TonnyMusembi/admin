<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Qr Code</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>
        <div class="text-center">
            {{-- <a class="btn btn-success" href="{{ route('')}}" id="createNewProduct"> Create New User</a> <br> --}}

        </div>
		<form class="text-center" action="{{route('qrcode.create')}}" method="get" accept-charset="utf-8">
			<div class="row mt-5">
				<div class="col-md-12">
					<h2>Qr Code Generation</h2>
					<button class="btn btn-success" type="submit">Generate</button>
					<a href="{{asset('QrCode.svg')}}" class="btn btn-primary" download>Download</a><br>
					<img class="img-thumbnail" src="{{asset('QrCode.svg')}}" width="150" height="150" style="margin-top: 20px">
				</div>
			</div>
		</form>
        <div class="container  mt-5 text-center">
            <div class="card-header text-center">Update Qr</div><br>
            <div class="card-body">
                {{-- <button class="btn btn-primary" type="submit">Update</button> --}}
                <a href="{{route('chartjs.index')}}" class="btn btn-primary">Update</a>
            </div>
        </div>
        <div class="container mt-5" >
            <div class="card-body">
                {{-- <div class="card-header">Purchase</div> --}}
             <form action="{{route('data')}}" enctype="" >
                {{-- <button class="btn btn-primary">Next</button> --}}
             </form>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card-body">
                {{-- <div class="card-header">Products</div> --}}

            </div>
        </div>
     <div class="container mt-5">
        <div class="cardbody" >

        </div>
        <form action="" enctype="" method="POST">

        </form>
     </div>
     <div class="container mt-5">
     <form action="{{ route('index') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="d-inline btn btn-link p-0">
                click here to request another
            </button>.
        </form>
</div>
	</body>
</html>
<script>
// export default {
//     data(){

//     }
// },
// mounted() {

//     axios.get() .then((respose) => {
//         console.log(response)
//     })

// },
  const url=""
    fetch('url')
    .then((response) => {
        console.log(response.data.data)
         this.tickest=response.data
    })

    .catch((error) => {
        console.log(error)
    })


    function SendCode(){  }
    let myArray =[20,22,23,24];
    console.log(myArray)
    myArray.length = 0;
    console.log(myArray)




</script>
