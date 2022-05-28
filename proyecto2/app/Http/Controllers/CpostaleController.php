<?php

namespace App\Http\Controllers;

use App\Models\Cpostale;
use Illuminate\Http\Request;

/**
 * Class CpostaleController
 * @package App\Http\Controllers
 */
class CpostaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpostales = Cpostale::paginate();

        return view('cpostale.index', compact('cpostales'))
            ->with('i', (request()->input('page', 1) - 1) * $cpostales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cpostale = new Cpostale();
        return view('cpostale.create', compact('cpostale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cpostale::$rules);

        $cpostale = Cpostale::create($request->all());

        return redirect()->route('cpostales.index')
            ->with('success', 'Cpostale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpostale = Cpostale::find($id);

        return view('cpostale.show', compact('cpostale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cpostale = Cpostale::find($id);

        return view('cpostale.edit', compact('cpostale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cpostale $cpostale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cpostale $cpostale)
    {
        request()->validate(Cpostale::$rules);

        $cpostale->update($request->all());

        return redirect()->route('cpostales.index')
            ->with('success', 'Cpostale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cpostale = Cpostale::find($id)->delete();

        return redirect()->route('cpostales.index')
            ->with('success', 'Cpostale deleted successfully');
    }
}
