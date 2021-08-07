<?php

namespace App\Http\Controllers;

use App\Models\forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = forms::latest()->paginate(5);
        return view('backend.forms.index',compact('forms'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'display_name' => 'required',
        'db_table_name' => 'required',
        'form_desc' => 'required',
        'order_in_sidebar' => 'required',
    ]);
        forms::create($request->all());
        return redirect()->route('forms.index')
        ->with('success','forms created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show(forms $forms)
    {
        return view('backend.forms.show',compact('forms'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit(forms $forms)
    {
        return view('backend.forms.edit',compact('forms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forms $forms)
    {
        $request->validate([
        'display_name' => 'required',
        'db_table_name' => 'required',
        'form_desc' => 'required',
        'order_in_sidebar' => 'required',
        ]);

    $forms->update($request->all());
    return redirect()->route('forms.index') ->with('success','forms updated successfully');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(forms $forms)
    {
        $forms->delete();
        return redirect()->route('forms.index')
        ->with('success','forms deleted successfully');    
    }
}
