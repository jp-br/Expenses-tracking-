@extends('layouts.design')
@section('content')



    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
       <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea name="description" id="description" class="form-control" rows="3" value="{{ $category->description }}"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save Category</button>
        </div>
    </form>
    
@endsection