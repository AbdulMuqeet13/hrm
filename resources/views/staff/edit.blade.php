@extends('layouts.app')

@section('content')

 <div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      Staff Details Edit
    </div>
    <div class="card-body">
     <a class="btn btn-primary" href="{{ route('staff.index') }}">Back</a>
   <form action="{{ route('staff.update', $staffs->id) }}" method="POST">
         @csrf
         @method('PUT')
        <div class="mb-3">
          <label for="department" class="form-label fw-semibold">Department</label>
          <input type="text" class="form-control" id="department" name="department" value="{{ $staffs->department }}" placeholder="Enter Department">
        </div>
        <div class="mb-3">
          <label for="designation" class="form-label fw-semibold">Designation</label>
          <input type="text" class="form-control" id="designation" name="designation" value="{{ $staffs->designation }}" placeholder="Enter Designation">
        </div>
        <div class="mb-3">
          <label for="salary" class="form-label fw-semibold">Salary</label>
          <input type="number" class="form-control" id="salary" name="salary" value="{{ $staffs->salary }}" placeholder="Enter Salary">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
   @endsection
