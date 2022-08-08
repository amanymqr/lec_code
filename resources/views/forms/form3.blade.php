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
            Register Form
        </h1>


{{--
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('form3_data') }}" method="post">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{ csrf_field() }} --}}

            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('email') }}" />
                @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>


            <div class="mb-3">
                <label>Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('name') }}" />
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password"  value="{{ old('password') }}" autocomplete="new-password" />
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>


            <div class="mb-3">
                <label>Bio</label>
                <textarea class="form-control @error('bio') is-invalid @enderror" type="text" placeholder="bio" name="bio" value ="{{ old('bio') }}" rows="5"></textarea>
                @error('bio')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>


            <div class="text-center">
                <button class="btn btn-primary w-25 ">send</button>

            </div>

        </form>

    </div>

</body>

</html>
