<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admindashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.CreateStock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)

    public function store()
    {
        $attributes = request()->validate([
            'Name' => 'required|min:3|max:255',
            'Quantity' => 'required|number|',
            'UnitPrice' => 'required|regex:/^\d+(\.\d{1,2})?$/',

        ]);
        // setting the value of CostPrice using mutator
        $stock = new Stock;
        $stock->setAttribute('CostPrice', [ $attributes['Quantity'], $attributes['UnitPrice']]);
        $attributes->save();





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    public function show($id)
    public function show()
    {
        //
        return view('admin.ReadStock');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)

    public function edit()
    {
        //
return view('admin.EditStock');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)

    public function update()

    {
        //
        return view('admin.UpdateStock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)

    public function destroy()
    {
        //
        return  view('admin.DeleteStock');
    }



}
