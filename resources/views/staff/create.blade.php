@extends('layouts.app')

@section('content')
    
 <div class="container mt-5">
        <h2>Enter New Staff Detail</h2>
        <form action="{{ route('staff.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter Department">
            </div>
           
              <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="textarea" class="form-control" id="designation" name="designation" placeholder="Enter Designation">
            </div>
      <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter Salary">
            </div>
      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 
@endsection