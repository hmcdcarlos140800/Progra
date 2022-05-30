<?php

namespace App\Http\Controllers;

use App\Models\Ropa;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class RopaController
 * @package App\Http\Controllers
 */
class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ropas = Ropa::paginate();

        return view('ropa.index', compact('ropas'))
            ->with('i', (request()->input('page', 1) - 1) * $ropas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ropa = new Ropa();
        $categorias=Categoria::pluck('nombre','id');
        return view('ropa.create', compact('ropa','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ropa::$rules);

        $ropa = Ropa::create($request->all());

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ropa = Ropa::find($id);

        return view('ropa.show', compact('ropa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ropa = Ropa::find($id);
        $categorias=Categoria::pluck('nombre','id');
        return view('ropa.edit', compact('ropa','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ropa $ropa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ropa $ropa)
    {
        request()->validate(Ropa::$rules);

        $ropa->update($request->all());

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ropa = Ropa::find($id)->delete();

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa deleted successfully');
    }
}
