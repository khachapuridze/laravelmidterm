
@extends("home")

@section("content")
    <form  method="post" enctype="multipart/form-data" action="{{route('employees.update', $employee->id)}}">
        @csrf
        @method("PUT")
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="name" class='form-control {{$errors->first("name")? "is-invalid" : "" }}'  value="{{old('name', $employee->name)}}" placeholder="Name" name="name">
                @if($errors->has("name"))
                    <p class="text-danger"> {{$errors->first("name")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">surname</label>
                <input type="name" class='form-control {{$errors->first("surname")? "is-invalid" : "" }}'  placeholder="{{old('surname', $employee->surname)}}" name="surname">
                @if($errors->has("surname"))
                    <p class="text-danger"> {{$errors->first("surname")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">position</label>
                <input type="name" class='form-control {{$errors->first("position")? "is-invalid" : "" }}' value="{{old('position', $employee->position)}}" placeholder="Name" name="position">
                @if($errors->has("position"))
                    <p class="text-danger"> {{$errors->first("position")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">phone</label>
                <input type="name" class='form-control {{$errors->first("phone")? "is-invalid" : "" }}' value="{{old('phone', $employee->phone)}}" placeholder="Name" name="phone">
                @if($errors->has("phone"))
                    <p class="text-danger"> {{$errors->first("phone")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">is_hired</label>
                <input type="name" class="form-control" value="{{old('is_hired', $employee->is_hired)}}" placeholder="Name" name="is_hired">
            </div>
        </div>
        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
