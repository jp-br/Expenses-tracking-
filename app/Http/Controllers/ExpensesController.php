<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpensesController extends Controller
{
    
    public function createExpenses(){
    $categories = Category::all();

        // 2. Pass the $categories variable to the view
    return view('categories.createExpenses', compact('categories'));

    }

   public function storeExpenses(Request $request){

   $validated = $request->validate([
    'category_id' => 'required',
    'name'=>'required|string|max:255',
    'amount'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
    'description'=>'nullable|string|max:255',
    'expense_date'=>'required|date'
   ]);

   Expense::create($validated);
   return redirect()->route('expenses.homeExpenses', $request->category_id)->with('success', 'Expense saved successfully!');
   }
    public function editExpenses($id)
   {
      $expenses = Expense::findOrFail($id);
      return view('categories.editExpenses', compact('expenses'));
   }

   public function updateExpenses(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'description' => 'nullable|string|max:255',
            'expense_date' => 'required|date'
        ]);

        $expense = Expense::findOrFail($id); // ✅ get model

        $expense->update($validated); // ✅ update safely

        return redirect()
            ->route('expenses.homeExpenses', $expense->category_id) // ✅ works
            ->with('success', 'Updated successfully!');
    }

    public function deleteExpenses($id)
    {
        $expense = Expense::findOrFail($id);

        $category_id = $expense->category_id; 
        $expense->delete();

        return redirect()
            ->route('expenses.homeExpenses', $category_id)
            ->with('success', 'Post Deleted successfully!');
    }
}

   
