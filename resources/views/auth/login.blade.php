@extends('base')

@include('navbar')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container offset-md-3" style="margin-top: 5%;">
            <div class="col">
                <div class="card shadow rounded border border-light" id="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" id="chatuss">
                                <img src="{{ url('images/chatus.jpg') }}" alt="chatus" class="rounded chat-us">

                                <div>
                                    <h3 class="text-center mt-2">LOG IN</h3>
                                </div>
                                <div>
                                    @if (session('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <form action="{{ '/' }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                                        <div class="input-group mb-3">
                                        <input type="email" name="email" id="email" placeholder="Email" class="form-control transparent-input">
                                        </div>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4 mt-1 col-sm-10 offset-sm-1">
                                        <div class="input-group mb-3">
                                        <input type="password" name="password" id="password" placeholder="Password" class="form-control transparent-input">
                                        </div>
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <div>
                                            <button class="btn btn-primary px-3 form-control mb-3" type="submit">Login</button>
                                            <a style="text-decoration: none; color: black; background-color: white; padding: 2px; border-radius: 5px; font-size: 14px;" href="{{ '/register' }}" class="border border-dark">Sign up for an account</a>
                                        </div>
                                    </div>
                                    </form>
                            </div>
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
    width: 610px;
    padding: 30px;
}
.chat-us {
    width: 250px;
    height: auto;
}
</style>
