<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal; // Assuming Deal is your model

class DealController extends Controller
{
    
    public function index()
    {
        $deals = Deal::all();
        return view('deals.index', compact('deals'));
    }
    
   
    public function create()
    {
        return view('deals.create');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            
        ]);
    
        Deal::create($request->all());
    
        return redirect()->route('deals.index')
                        ->with('success','Deal created successfully.');
    }
    
    
    public function show(Deal $deal)
    {
        return view('deals.show',compact('deal'));
    }
    
    
    public function edit(Deal $deal)
    {
        return view('deals.edit',compact('deal'));
    }
    

    public function update(Request $request, Deal $deal)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $deal->update($request->all());
    
        return redirect()->route('deals.index')
                        ->with('success','Deal updated successfully');
    }
    
    
    public function destroy(Deal $deal)
    {
        $deal->delete();
    
        return redirect()->route('deals.index')
                        ->with('success','Deal deleted successfully');
    }
}
