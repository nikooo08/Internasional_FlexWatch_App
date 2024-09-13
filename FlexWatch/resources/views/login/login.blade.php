@extends('layoutDashboard')

@section('title', 'Login')

@section('content')
    <div class="container text-center">
        <h2>Login</h2>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card container text-center" style="width: 18rem;">
                <div class="card-body">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="{{ Session::get('email')}}" name="email" id="email" class="form-control" required autofocus>
            </div>

            <div class="form-group container text-center">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>



            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
