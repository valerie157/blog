<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization; // Don't forget to import the Organization model

class OrganizationController extends Controller
{
   
    public function index()
    {
        $organizations = Organization::all();
        return view('organization.index', compact('organizations'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
