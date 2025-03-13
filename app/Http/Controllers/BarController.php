<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;

class BarController extends Controller
{
    /**
     * Display a listing of Bars.
     */
    public function index()
    {
        $bars = Bar::paginate(5);

        return view('bars.index', compact('bars'));
    }

    /**
     * Show the form for creating a new Bar.
     */
    public function create()
    {
        return view('bars.create');
    }

    /**
     * Store a newly created Bar in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'waldo' => 'nullable',
            'grault' => 'numeric|required',
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        $bar = Bar::create($validated);

        // Redirect to the blog index page
        return redirect()->route('bars.index');
    }

    /**
     * Display the specified Bar.
     */
    public function show(Bar $bar)
    {
        return view('bars.show', [
            'bar' => $bar
        ]);
    }

    /**
     * Show the form for editing the specified Post.
     */
    public function edit(Bar $bar)
    {
        return view('bars.edit', [
            'bar' => $bar
        ]);
    }

    /**
     * Update the specified Post in storage.
     */
    public function update(Request $request, Bar $bar)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'waldo' => 'nullable',
            'grault' => 'numeric|required',
        ]);

        // Use `update` to mass (re)assign updated attributes
        $bar->update($validated);

        // Redirect to the blog show page
        return redirect()->route('bars.show', $bar)
            ->with('success', 'Bar successfully updated');
    }

    /**
     * Show the form for deleting the specified Post.
     */
    public function delete(Bar $bar)
    {
        return view('bars.delete', [
            'bar' => $bar
        ]);
    }

    /**
     * Remove the specified Post from storage.
     */
    public function destroy(Bar $bar)
    {
        // Delete the post from the database
        $bar->delete();

        // Redirect to the blog show page
        return redirect()->route('bars.index')
            ->with('success', 'Bar successfully deleted');
    }

}
