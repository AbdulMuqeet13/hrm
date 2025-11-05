@extends('layouts.app')

@section('content')
    <h1>Users Details Edit</h1>
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
     
{{-- <div class="mb-3">
    <label for="detail" class="form-label">Detail:</label><br>
    <textarea id="detail" name="detail" class="form-control" rows="4" cols="50"  required> {{ $users->detail }} </textarea><br><br>
</div> --}}
      <input type="submit" value="Submit">
   </form>
   @endsection
