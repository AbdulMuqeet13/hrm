<x-app-layout>
   

    @section('content')
    
    <div class="container mt-5">
        <div class="d-flex flex-row justify-content-between mb-10" >
        <div><h1>Staff </h1></div>
        <div><a href="{{ route('staff.create') }}" class="btn btn-primary">Create staff</a></div>
    </div>
  <div class="card shadow-sm">
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
            <th>#</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $staff)
          <tr>
            <td>{{ $staff->id }}</td>
            <td>{{ $staff->department }}</td>
            <td>{{ $staff->designation }}</td>
            <td>{{ $staff->salary }}</td>
              <td class="text-center d-flex">
                        <!-- Edit link -->
                        <a href="{{route('staff.edit', $staff->id)}}" class="btn btn-sm btn-primary me-1 pt-2" data-toggle="tooltip" data-placement="bottom" title="Edit Staff Data">
                            <i class="fa-solid fa-pen"></i> 
                        </a>
                         <form action="{{ route('staff.destroy' , $staff->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Staff Data"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    
                       
                    </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
    
        {{-- <div class="d-flex flex-row justify-content-between mb-10" >
        <div><h1>Staff Details</h1></div>
        <div><a href="{{ route('staff.create') }}" class="btn btn-primary">Create staff</a></div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle ">
            <thead class="table-dark" >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="margin:12px;">Department</th>
                    <th scope="col">Designation</th>
                    <th scope="col" class="text-center">Salary</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($staffs as $staff)
                <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->department }}</td>
                <td>{{ $staff->designation }}</td>
                <td>{{ $staff->salary }}</td>
                           
                    <td class="text-center d-flex">
                        <!-- Edit link -->
                        <a href="{{route('staff.edit', $staff->id)}}" 
                        class="btn btn-sm btn-primary me-1" >
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                         <form action="{{ route('staff.destroy' , $staff->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                    
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    @endsection
</x-app-layout>