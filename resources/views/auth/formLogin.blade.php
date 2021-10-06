@extends('layouts.app')

@section('content')
<section class="container form-login h-100">
    <div class="row justify-content-between align-items-center header-row">
        <div class="col-md-5">
            <h2 class="text-center">Inicia sesión con tus credenciales</h2>
            <img src="" alt="">
        </div>
        <div class="col-md-5">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelpId" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror    
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
        </div>
    </div>
</section>
@endsection