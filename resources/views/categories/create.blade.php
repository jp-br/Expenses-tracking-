@extends('layouts.design')
@section('content')


    <form action="{{ route('categories.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
       <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save Category</button>
        </div>

    </form>   
    
@endsection