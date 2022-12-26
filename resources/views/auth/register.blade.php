@extends('base')

@include('navbar')

@section('content')

@section('title', 'Register')
<body>
    <div class="container offset-md-2" style="margin-top: 3%;">
        <div class="card shadow mb-5 border border-light rounded" id="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="{{ url('images/chatus.jpg') }}" alt="chatus" class="rounded chat-us">
                        <div>
                            <h1 class='text-center mt-1'>Register</h1>
                        </div>
                    </div>
                    <div class="col">
                        <form action="{{ '/register' }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                <div class="input-group mb-3">
                                    <input type="name" name="name" id="name" placeholder="Name" class="form-control transparent-input">
                                </div>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                <div class="input-group mb-3">
                                    <span>Male: <input type="radio" name="gender" id="male" placeholder="" value="male"></span>
                                    <span style="margin-left: 5px">Female: <input type="radio" name="gender" id="female" placeholder="" value="female"></span>
                                </div>
                                @error('gender')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control transparent-input">
                                </div>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                <div class="input-group mb-3">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control transparent-input">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                <div class="input-group mb-3">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control transparent-input">
                                </div>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <div class="text-center">
                                    <button class="btn btn-primary px-3 form-control mb-3">Register</button>
                                    <a style="text-decoration: none; color: black; background-color: white; padding: 5px; border-radius: 5px; font-size: 13px;" href="{{ '/' }}" class="border border-dark">Already have an account</a>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
body{
    overflow: hidden;
    height: 100vh;
}
#card {
    width: 800px;
    padding: 30px;
}
.chat-us {
    width: 340px;
    height: auto;
}
</style>
