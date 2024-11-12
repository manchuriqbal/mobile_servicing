<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnicianRequest;
use App\Http\Requests\UpdateTechnicianRequest;
use App\Models\Technician;
use App\Models\TechnicianRole;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.technician.index')->with([
            'technicians' => Technician::latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.technician.create')->with([
            'roles' => TechnicianRole::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechnicianRequest $request)
    {
        $data = $request->validated();

        Technician::create($data);

        return redirect()->route('technicians.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technician $technician)
    {
        // dd($technician);
        $technician->load('role');

        return view('pages.technician.show')->with([
            'technician' => $technician,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technician $technician)
    {
        return view('pages.technician.edit')->with([
            'roles' => TechnicianRole::all(),
            'technician' => $technician,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnicianRequest $request, Technician $technician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technician $technician)
    {
        //
    }
}
