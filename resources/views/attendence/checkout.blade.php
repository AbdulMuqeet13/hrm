@extends('layouts.app')

@section('content')

    <div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      Create Attendance
    </div>
    <div class="card-body">
      <form action="{{ route('attendence.checkout') }}" method="POST">
        @csrf
        <div class="mb-3">
          <h1>Your Id is:</h1>
        </div>
        <div class="mb-3">
          <label for="checkout_time" class="form-label fw-semibold">Checkout Time</label>
          <input type="time" class="form-control" id="checkout_time" name="checkout_time" placeholder="Enter Checkout Time">
        </div>
    
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

 
@endsection