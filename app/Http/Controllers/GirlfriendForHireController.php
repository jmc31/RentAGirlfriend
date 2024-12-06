<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GirlfriendForHire;

class GirlfriendForHireController extends Controller
{

    public function index()
    {
        $girlfriends = GirlfriendForHire::paginate(10);


        return view('girlfriend-for-hire', compact('girlfriends'));

    }

    public function create()
    {
        return view('girlfriend-for-hire.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'description' => 'required|string',
        ]);

        GirlfriendForHire::create($request->all());

        return redirect()->route('girlfriend-for-hire.index');
    }

    public function edit($id)
    {
        $girlfriend = GirlfriendForHire::findOrFail($id);
        return view('girlfriend-for-hire.edit', compact('girlfriend'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15',
            'description' => 'required|string',
        ]);


        $girlfriend = GirlfriendForHire::findOrFail($id);


        $girlfriend->update($request->all());


        return redirect()->route('girlfriend-for-hire.index')->with('success', 'Girlfriend details updated successfully!');
    }


    public function destroy($id)
    {
        $girlfriend = GirlfriendForHire::findOrFail($id);
        $girlfriend->delete();

        return redirect()->route('girlfriend-for-hire.index');
    }

    public function show($id)
    {
        $girlfriend = GirlfriendForHire::findOrFail($id);
        return view('girlfriend-for-hire.show', compact('girlfriend'));
    }
}
