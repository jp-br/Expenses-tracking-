@extends('layouts.design')
@section('content')

<div class="container">
    <div class="col-6 d-flex justify-content-end">
        <a href="{{ route('expenses.createExpenses') }}" class="btn btn-primary btn sm">Create</a>
    </div>
</div>
<div class="container mb-4">
    <h2>Showing Expenses for: <span class="text-primary">{{ $category->name }}</span></h2>
    <p>{{ $category->description }}</p>
</div>

<div class="container ">
    <div class="row">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="max-height: 300px; overflow-y: auto;">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>   
                </thead>
                
                <tbody>
                    @foreach ($expense as $item) {{-- Changed name to $item --}}
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->amount }}</td>
                            <td class="limit-text">{{ $item->description }}</td>
                            <td>{{ $item->expense_date }}</td> {{-- Match your model field name --}}
                            
                            <td>
                                {{-- 2. Use $item->id because that's the specific expense we are editing --}}
                                <a href="{{ route('expenses.editExpenses', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                
                                {{-- 3. Use $item->id for the delete form as well --}}
                                <form action="{{ route('expenses.deleteExpenses', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
</div>

@endsection