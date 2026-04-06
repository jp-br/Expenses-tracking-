@extends('layouts.design')
@section('content')

<div class="container">
    <div class="row pb-5">
        <div class="col-6 d-flex justify-content-start">
            <p>HELLO</p>
        </div>

        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn sm">Create</a>
        </div>
    </div>
    
</div>
<div class="container ">
    <div class="row">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="max-height: 300px; overflow-y: auto;">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th> </tr>
                    </tr>   
                </thead>
                
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td class="limit-text">{{ $category->description }}</td>
                            
                            <td>
                       `        <a href="{{ route('categories.create') }}" class="btn btn-primary btn sm">View</a>
                                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-primary btn sm">Edit</a>
                                
                                <form action="{{ route('categories.delete', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
</div>



    <!-- @foreach ($categories as $category)
    
     @endforeach
     -->
   
    
@endsection