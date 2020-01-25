@extends('layouts.master')
@section('title', 'User')
@section('breadcrumb', 'User')


@section('content')

@if (session()->has('message'))
<div class="alert alert-success alert-has-icon mb-3">
	<div class="alert-icon"><i class="far fa-lightbulb"></i></div>
	<div class="alert-body">
		<div class="alert-title">Success</div>
		{{session()->get('message')}}
	</div>
</div>
@endif

<div class="card">

	<div class="card-header">
		Create User
	</div>
	
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Role</th>
					<th scope="col">Active</th>
					<th scope="col">Email</th>
					<th scope="col">Created</th>
					<th scope="col">Updated</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $key => $user)
				<tr>
					<th scope="row">{{ $key+1}}</th>
					<td>{{ $user->name }}</td>
					<td>{{ $user->role->name }}</td>
					<td>{{ $user->is_active==1 ? 'Active': 'Deactive' }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->created_at->diffForHumans() }}</td>
					<td>{{ $user->updated_at->diffForHumans() }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
