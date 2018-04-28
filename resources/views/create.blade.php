@extends('layouts.master');
@section('content')
<div class="row">
    <form method="post" action="{{url('/store')}}">

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        
        <div class="form-group">
            <label>Gender</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="others">Others
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>

        <div class="form-group">
            <label>Nationality</label>
            <select name="nationality"class="form-control">
                <option value="ok">ok</option>
            </select>
        </div>


        <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
        </div>

        <div class="form-group">
            <label>Education Background</label>
            <select name="edub" id="edub" class="form-control">
                <option value="none">None</option>
                <option value="see">SEE</option>
                <option value="intermediate">Intermediate</option>
                <option value="bachelors">Bachelors</option>
                <option value="masters">Masters</option>
                <option value="phd">Phd</option>
            </select>
        </div>

        <div class="form-group">
            <label>Mode of Contact</label>
            <select name="modeOfContact" id="modeOfContact" class="form-control">
                <option value="none">None</option>
                <option value="phone">Phone</option>
                <option value="email">Email</option>
            </select>
        </div>

        {{csrf_field()}}

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

@endsection

@section('scripts')

    <script>
        $(function(){
            $("#dob").datetimepicker({
            format: 'YYYY-MM-DD'
        });

        });
    </script>
    
@endsection