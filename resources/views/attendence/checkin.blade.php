@extends('layouts.app')

@section('content')

    <div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      Create Attendance
    </div>
    <div class="card-body">
      <form action="{{ route('attendence.checkin') }}" method="POST">
        @csrf
        
        <div class="mb-3">
          <label for="checkin_time" class="form-label fw-semibold">checkin Time</label>
          <input type="time" class="form-control" id="checkin_time" name="checkin_time" placeholder="Enter Checkin Time">
        </div>
        <div class="mb-3">
          <label for="date" class="form-label fw-semibold">Date</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label fw-semibold">Status</label>
          <input type="text" class="form-control" id="status" name="status">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

 
@endsection