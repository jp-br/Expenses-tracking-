@extends('layouts.design')
@section('content')

<div class="container">
    <form action="{{ route('expenses.updateExpenses', $expenses->id) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')

    <input type="hidden" name="category_id" value="{{ $expenses->category_id }}">

    <div class="mb-3">  
        <label class="form-label">Expense Name</label>
        <input type="text" name="name" class="form-control" required value="{{ $expenses->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Amount</label>
        <input type="number" name="amount" class="form-control" step="0.01" required value="{{ $expenses->amount }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $expenses->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="date" name="expense_date" class="form-control" required value="{{ $expenses->expense_date }}">
    </div>

    <button type="submit" class="btn btn-success">Update Expense</button>
</form>
</div>

@endsection