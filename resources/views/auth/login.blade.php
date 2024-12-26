@extends('auth.index')

@section('title', 'Login')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-2 text-center">Welcome to Furniture Inventory System! 👋</h4>
        <p class="mb-4 text-center">Please sign-in to your account</p>

        <form id="formAuthentication" class="mb-3" action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" autofocus />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="••••••••" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
            </div>
        </form>

        <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{ route('register') }}">Create an account</a>
        </p>
    </div>
</div>
@endsection
