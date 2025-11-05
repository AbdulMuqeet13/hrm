@extends('layouts.app')

@section('content')
    
   <div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      Create User
    </div>
    <div class="card-body">
      <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-semibold">password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
 
@endsection