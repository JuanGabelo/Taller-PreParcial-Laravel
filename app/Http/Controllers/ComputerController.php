<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Http\Requests\ComputerRequest;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Computer::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerRequest $request)
    {
        $computer = new Computer();
        $computer->computer_name = $request->computer_name;
        $computer->computer_date = $request->computer_date;
        $computer->computer_max_capacity = $request->computer_max_capacity;
        $computer->computer_brand = $request->computer_brand;
        $computer->computer_description = $request->computer_description;
        $computer->computer_color = $request->computer_color;
        $computer->computer_is_active = $request->computer_is_active;
        $computer->computer_price = $request->computer_price;
        $computer->computer_size = $request->computer_size;
        $computer->save();
        return $computer;
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return $computer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        $computer->computer_name = $request->computer_name ?? $computer->computer_name;
        $computer->computer_date = $request->computer_date ?? $computer->computer_date;
        $computer->computer_max_capacity = $request->computer_max_capacity ?? $computer->computer_max_capacity;
        $computer->computer_brand = $request->computer_brand ?? $computer->computer_brand;
        $computer->computer_description = $request->computer_description ?? $computer->computer_description;
        $computer->computer_color = $request->computer_color ?? $computer->computer_color;
        $computer->computer_is_active = $request->computer_is_active ?? $computer->computer_is_active;
        $computer->computer_price = $request->computer_price ?? $computer->computer_price;
        $computer->computer_size = $request->computer_size ?? $computer->computer_size;
        $computer->save();
        return $computer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json([
            'message' => 'Computer deleted',
            'computer' => $computer
        ], 200);
    }
}
