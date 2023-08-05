<?php

namespace App\Http\Controllers;

use App\Models\Movil;
use Illuminate\Http\Request;

/**
 * Class MovilController
 * @package App\Http\Controllers
 */
class MovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movils = Movil::paginate();

        return view('movil.index', compact('movils'))
            ->with('i', (request()->input('page', 1) - 1) * $movils->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movil = new Movil();
        return view('movil.create', compact('movil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movil::$rules);

        $movil = Movil::create($request->all());

        return redirect()->route('movils.index')
            ->with('success', 'Movil created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movil = Movil::find($id);

        return view('movil.show', compact('movil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movil = Movil::find($id);

        return view('movil.edit', compact('movil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movil $movil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movil $movil)
    {
        request()->validate(Movil::$rules);

        $movil->update($request->all());

        return redirect()->route('movils.index')
            ->with('success', 'Movil updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movil = Movil::find($id)->delete();

        return redirect()->route('movils.index')
            ->with('success', 'Movil deleted successfully');
    }
}
