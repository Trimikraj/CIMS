@extends('layouts.master'); 
@section('content')

<div class="container col-xs-5 formStyle">
    <form method="post" action="{{url('/store')}}" id="clientForm">
        <div class="col-xs-12">
    @include('partials.error')

            <div class="form-group">
                <label>Name of the Client: </label>
                <input type="text" class="form-control" name="name" placeholder="Name" minlength="3" required />
            </div>

            <div class="form-group">
                <label>Gender: </label>
                <input type="radio" name="gender" value="male" checked="checked">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="others">Others
            </div>

            <div class="form-group">
                <label>Phone No.: </label>
                <input type="" class="form-control" name="phone" id="phone" placeholder="Phone" required />
                <span style="display:none" id="phoneError">Phone no must be of 10 Digits</span>
            </div>

            <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" name="email" placeholder="Email" required />
            </div>

            <div class="form-group">
                <label>Address: </label>
                <input type="text" class="form-control" name="address" minlength="3" placeholder="Address" required />
            </div>

            <div class="form-group">
                <label>Nationality: </label>
                <select name="nationality" class="form-control" required>
                    <option value="">--- Select a Nationality ---</option>
                    @foreach (\App\Utility\ClientNationality::all() as $nationality)
                    <option value="{{$nationality}}">{{$nationality}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Date of Birth: </label>
                <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
            </div>

            <div class="form-group">
                <label>Education Background: </label>
                <select name="edub" id="edub" class="form-control" required>
                    <option value="">--- Select an Education Background ---</option>
                    <option value="none">None</option>
                    <option value="see">SEE</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="bachelors">Bachelors</option>
                    <option value="masters">Masters</option>
                    <option value="phd">Phd</option>
                </select>
            </div>

            <div class="form-group">
                <label>Contact By: </label>
                <select name="modeOfContact" id="modeOfContact" class="form-control" required>
                    <option value="">--- Select Mode of Contact ---</option>
                    <option value="none">None</option>
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                </select>
            </div>

            {{csrf_field()}}
            <a href="{{url('/')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
 
@section('scripts')

<script>
    $(function(){

            $("#dob").datetimepicker({
            format: 'YYYY-MM-DD'
            });

            $("#phone").keyup(function(){
                var phoneno = /^\d{10}$/;
                var text = $(this).val();
                    if(!text.match(phoneno))
                    {
                        $('#phoneError').css("display","block");
                        $('#submit').attr('disabled', true);
                    }else{
                        $('#phoneError').css("display","none");
                        $('#submit').attr('disabled', false);
                    }
            });

        });

</script>
@endsection