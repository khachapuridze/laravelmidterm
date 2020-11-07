@extends("home")
@section("content")
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>surn</th>
            <th>position</th>
            <th>phone</th>
            <th>status</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>

    @foreach ($employees as $employee)
        <tr>

            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->surname}}</td>
            <td>{{$employee->position    }}</td>
            <td>{{$employee->phone}}</td>
            <td>@if ($employee->is_hired==true)hired @else
                    not hired
                @endif</td>
            <td><a href="{{route('employees.edit', $employee->id)}}" class="btn btn-info">Edit </a></td>
        </tr>

    @endforeach
        </tbody>

@endsection
