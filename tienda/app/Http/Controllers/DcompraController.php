<?php

namespace App\Http\Controllers;

use App\Models\Dcompra;
use App\Models\Ropa;
use App\Models\Compra;
use Illuminate\Http\Request;

/**
 * Class DcompraController
 * @package App\Http\Controllers
 */
class DcompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dcompras = Dcompra::paginate();

        return view('dcompra.index', compact('dcompras'))
            ->with('i', (request()->input('page', 1) - 1) * $dcompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dcompra = new Dcompra();
        $ropas=Ropa::pluck('descripcion','id');
        $compras=Compra::pluck('fecha','id');
        return view('dcompra.create', compact('dcompra','ropas','compras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dcompra::$rules);

        $dcompra = Dcompra::create($request->all());

        return redirect()->route('dcompras.index')
            ->with('success', 'Dcompra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dcompra = Dcompra::find($id);

        return view('dcompra.show', compact('dcompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dcompra = Dcompra::find($id);
        $ropas=Ropa::pluck('descripcion','id');
        $compras=Compra::pluck('fecha','id');
        return view('dcompra.edit', compact('dcompra','ropas','compras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dcompra $dcompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dcompra $dcompra)
    {
        request()->validate(Dcompra::$rules);

        $dcompra->update($request->all());

        return redirect()->route('dcompras.index')
            ->with('success', 'Dcompra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dcompra = Dcompra::find($id)->delete();

        return redirect()->route('dcompras.index')
            ->with('success', 'Dcompra deleted successfully');
    }
}
