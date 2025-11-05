@extends('layouts.app')

@section('content')

 <div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      Create New User
    </div>
    <div class="card-body">
       <a class="btn btn-primary" href="{{ route('user.index') }}">Back</a>
   <form action="{{ route('user.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" placeholder="Enter Name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}" placeholder="Enter Email">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
 

    {{-- <h1>Users Details Edit</h1>
    <a href="{{ route('user.index') }}">Back</a>
   <form action="{{ route('user.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT')
      <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name" value="{{ $users->name }}">
            </div>
      <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value="{{ $users->email }}">
            </div>
     
      <input type="submit" value="Submit">
   </form> --}}
   @endsection
