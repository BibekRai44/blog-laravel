@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create a Category</div>

        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </form>
        </div>
    </div>
@endsection
