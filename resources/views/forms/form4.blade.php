


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="container">


        <h1>upload your cv</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



        <form action="{{ route('form4_data') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label>Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('email') }}" />
                @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>



            <div class="mb-3">
                <label >cv</label>
                <input class="form-control @error('name') is-invalid @enderror" name="cv" type="file" placeholder="name">
                @error('cv')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>

            <button class="btn btn-dark w-100">upload</button>
        </form>
    </div>






</body>

</html>
