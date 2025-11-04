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
                <label for="detail" class="form-label">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="4" cols="50" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 
@endsection