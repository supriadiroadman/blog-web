@extends('layouts.master')
@section('title', 'Create User')
@section('breadcrumb', 'Create User')

@section('content')

<div class="card">
    <div class="card">
        <div class="card-header">
            Create User
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('users.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Enter name">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="Enter email">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control @error('role_id')is-invalid @enderror" name="role_id" id="role">
                        <option value="" selected disabled="">Choose</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="radio" value="1">
                        <label class="form-check-label" for="radio">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="radio" value="0" checked>
                        <label class="form-check-label" for="radio">
                            Deactive
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo_id">Photo</label>
                    <input type="file" name="photo_id" class="form-control-file" id="photo_id">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Enter password">
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

@endsection
