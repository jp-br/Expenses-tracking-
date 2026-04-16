@extends('layouts.design')
@section('content')

<div class="container">
    <form action="{{ route('expenses.storeExpenses') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        {{-- @foreach($categories as $category)
        <input type="hidden" name="category_id" value="{{ $category->id }}">

        @endforeach
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Select a Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>  --}}

        <div class="mb-3">  
            <label for="name" class="form-label">Expense Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="expense_date" class="form-label">Date</label>
            <input type="date" name="expense_date" id="expense_date" class="form-control" required>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save Expense</button>
        </div>
    </form>   
</div>

@endsection