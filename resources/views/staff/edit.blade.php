@extends('layouts.app')

@section('content')
    <h1>Staff Details Edit</h1>
    <a href="{{ route('staff.index') }}">Back</a>
   <form action="{{ route('staff.update', $staffs->id) }}" method="POST">
    @csrf
    @method('PUT')
      
      <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $staffs->department }}" placeholder="Enter Department">
            </div>
           
              <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="textarea" class="form-control" id="designation" name="designation" value="{{ $staffs->designation }}" placeholder="Enter Designation">
            </div>
      <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value="{{ $staffs->salary }}"  placeholder="Enter Salary">
            </div>
      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      

   </form>
   @endsection
