<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\RollType;
use App\Models\SteelType;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items.index', ['items' => Item::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create', ['rollTypes' => RollType::all(), 'steelTypes' => SteelType::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'roll_type_id' => 'required|exists:roll_types,id',
            'steel_type_id' => 'required|exists:steel_types,id',
            'size' => 'required'
        ]);

        Item::create($request->only(['roll_type_id', 'steel_type_id', 'size']));
        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item, 'rollTypes' => RollType::all(), 'steelTypes' => SteelType::all() ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $this->validate($request, [
            'roll_type_id' => 'required|exists:roll_types,id',
            'steel_type_id' => 'required|exists:steel_types,id',
            'size' => 'required'
        ]);

        $item->update($request->only(['roll_type_id', 'steel_type_id', 'size']));
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/items');
    }
}
