@extends('layouts.master')
@section('content')

<div class="page-header">
	<h2 class="page-title">Client Details</h2>
</div>

<a href="{{url('/create')}}" class="btn btn-primary" title="Add Client"><span class="glyphicon glyphicon-plus"></span></a>
<p></p>
<table class="table table-striped">
	<thead style="font-size: 16px">
		<tr>
			<th>S.N.</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address</th>
			<th>Nationality</th>
			<th>Date of birth</th>
			<th>Education Background</th>
			<th>Mode of Contact</th>
		</tr>
	</thead>

	<tbody style="font-size: 14px">
		@foreach($clients as $key=>$client)
		<tr>
			<td>{{ $key+1 }}</td>
			<td>{{ ucfirst($client['name']) }}</td>
			<td>{{ ucfirst($client['gender']) }}</td>
			<td>{{ $client['phone'] }}</td>
			<td>{{ $client['email'] }}</td>
			<td>{{ ucfirst($client['address']) }}</td>
			<td>{{ ucfirst($client['nationality']) }}</td>
			<td>{{ $client['dob'] }}</td>
			<td>{{ ucfirst($client['edub']) }}</td>
			<td>{{ ucfirst($client['modeOfContact']) }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection