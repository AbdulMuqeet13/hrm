@extends('layouts.app')

@section('content')
    
 <div class="container mt-5">
        <h2>Enter New User Detail</h2>
        <form action="{{ route('userdetail.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
           
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value="{{ $users->email }}">
            </div>
      <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" value="{{ $users->password }}">
            </div>
{{-- <div class="mb-3"
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 
@endsection