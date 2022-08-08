<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <h1>
            Basic Form
        </h1>

        <form action="{{ route('form2_data') }}" method="post">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{ csrf_field() }} --}}

            @csrf
            <div class="mb-4">
                <label style="color: rgb(0, 20, 100)">Name</label>
                <input class="form-control" type="text" placeholder="name" name="name">

                <label style="color: rgb(0, 20, 100)">Email</label>
                <input class="form-control" type="email" placeholder="email" name="email">

                <label style="color: rgb(0, 20, 100)">Age</label>
                <input class="form-control" type="text" placeholder="age" name="age">


            </div>
            <div class="text-center">
                <button class="btn btn-primary w-25 ">send</button>

            </div>

        </form>

    </div>

</body>

</html>
