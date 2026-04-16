<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function home(){
    $categories = Category::latest()->get();

    return view('categories.home', compact('categories'));

   }

   public function create(){
    return view('categories.create');
   }

   public function store(Request $request){

   $validated = $request->validate([
    'name'=>'required|string|max:255',
    'description'=>'nullable|string|max:255'
   ]);

   Category::create($validated);
   return redirect()->route('categories.home')->with('success', 'Category saved successfully!');
   }

   public function edit($id)
   {
      $category = Category::findOrFail($id);
      return view('categories.edit', compact('category'));
   }

   public function update(Request $request, $id)
   {
      $validated = $request->validate([
         
         'name'=>'required|string|max:255',
         'description'=>'nullable|string'
      ]);
      $category = Category::findOrFail($id);
      $category->update($validated);
      return redirect()->route('categories.home')->with('success', 'Post Updated successfully!');
   }

   public function delete($id){
      $category = Category::find($id);
      $category->delete();

      return redirect()->route('categories.home')->with('success', 'Post Deleted successfully!');
   }

   

   public function homeExpenses($id)
   {
      $category = Category::findOrFail($id);
      $expense = Expense::where('category_id', $id)->latest()->get();
      
      
      return view('categories.homeExpense', compact('expense','category'));

   }
}
