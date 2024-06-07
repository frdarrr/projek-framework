@extends('layout/aplikasi')

@section('konten')
<div class=" center border rounded px-3 py-3 mx-auto">
    <h1>Login</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
    </form>
</div>
@endsection