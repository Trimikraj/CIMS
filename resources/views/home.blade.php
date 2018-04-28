@extends('layouts.master');
@section('content')
	<a href="{{url('/create')}}">Add Client</a>
    <table class="table">
		<thead>
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Nationality</th>
				<th>Date of Birth</th>
				<th>Educational Background</th>
				<th>Mode Of Contact</th>
			</tr>
		</thead>

		<tbody>
			@foreach($clients as $key=>$client)
			<tr> 
				<td>{{ $key+1 }}</td>
				<td>{{ $client['name'] }}</td>
				<td>{{ $client['gender'] }}</td>
				<td>{{ $client['phone'] }}</td>
				<td>{{ $client['email'] }}</td>
				<td>{{ $client['address'] }}</td>
				<td>{{ $client['nationality'] }}</td>
				<td>{{ $client['dob'] }}</td>
				<td>{{ $client['edub'] }}</td>
				<td>{{ $client['modeOfContact'] }}</td>
			</tr>
			@endforeach
		</tbody>
    </table>
    

@stop