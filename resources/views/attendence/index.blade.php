@extends('layouts.app')

@section('content') 

 <div class="container mt-5">
        <div class="d-flex flex-row justify-content-between mb-10" >
        @if (!$attendence)
    <form action="{{ route('attendence.checkin') }}" method="POST">
        @csrf
        <button class="btn btn-primary">Check In</button>
    </form>
@elseif(!$attendence->checkout_time)
    <form action="{{ route('attendence.checkout') }}" method="POST">
        @csrf
        <button class="btn btn-primary">Check out</button>
    </form>
@


      
@endif
        {{-- <form action="{{ route('attendence.checkin') }}" method="POST">
          @csrf
          <button class="btn btn-primary">Check In</button>
        </form>
        <form action="{{ route('attendence.checkout')  }}" method="POST">
          @csrf
          <button class="btn btn-primary">Check out</button>
        </form>
         --}}
        
    </div>
  <div class="card shadow-sm mt-5">
    <div class="card-header d-flex justify-content-between align-items-center">
      <span>Staff Details</span>
      <div class="input-group" style="width: 200px;">
        <input type="text" class="form-control form-control-sm" placeholder="Search">
        <button class="btn btn-outline-secondary btn-sm" type="button">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>Staff id</th>
            <th>Checkin Time</th>
            <th>Checkout Time</th>
            <th>date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($attendences as $attendence)
          <tr>
            <td>{{ $attendence->staff_id}}</td>
            <td>{{ $attendence->checkin_time}}</td>
            <td>{{ $attendence->checkout_time }}</td>
            <td>{{ $attendence->date }}</td>
            <td>{{ $attendence->status }}</td> 
                   <!-- Edit link -->
                        {{-- <a href="{{route('staff.edit', $staff->id)}}" class="btn btn-sm btn-primary me-1 pt-2" data-toggle="tooltip" data-placement="bottom" title="Edit Staff Data">
                            <i class="fa-solid fa-pen"></i> 
                        </a>
                         <form action="{{ route('staff.destroy' , $staff->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Staff Data"><i class="fa-solid fa-trash"></i></button>
                        </form>
                     --}}
                       
                    </td> 
         </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection 