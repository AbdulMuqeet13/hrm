<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
    
        <div class="d-flex flex-row justify-content-between mb-10" >
        <div><h1>Staff Details</h1></div>
        {{-- <div><a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a></div> --}}
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
    </div>
    @endsection
</x-app-layout>