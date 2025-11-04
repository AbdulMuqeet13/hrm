<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
    
        <div class="d-flex flex-row justify-content-between mb-10" >
        <div><h1>User Details</h1></div>
        <div><a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a></div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle ">
            <thead class="table-dark" >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="margin:12px;">Name</th>
                    <th scope="col">Email</th>
                 
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            
                    <td class="text-center d-flex">
                        <!-- Edit link -->
                        <a href="{{route('user.edit', $user->id)}}" 
                        class="btn btn-sm btn-primary me-1">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                         <form action="{{ route('user.destroy' , $user->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</x-app-layout>