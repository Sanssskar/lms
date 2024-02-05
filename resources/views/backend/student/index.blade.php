<x-app-layout>
<div class="card ">
    <div class="card-header d-flex justify-content-between">
        {{-- {{ $students}} --}}
    <div>
        <h1> Student's Details</h1>
    </div>
    <div>
    <a href="{{route('Student.create')}}" class="btn btn-primary"> Add New(+)</a>
    </div>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Sn</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td></td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->phone}}</td>
                <td>
                    <a href="{{route('Student.edit',$student->id)}}" class="btn btn-primary">Edit </a>
                </td>

            </tr>

            @endforeach
        </table>

    </div>
</div>
</x-app-layout>
