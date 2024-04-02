<?php

namespace App\Http\Controllers;
use Ramsey\Uuid\Uuid;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pais = pais::all();
        $paises = DB::table('tb_pais')
            ->select('*')->get();//->paginate(25);
        return view('pais.index',['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = DB::table('tb_pais')
            ->orderBy('pais_nomb')
            ->get();
            return view("pais.new",["paises"=>$paises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paises = new Pais();
        $paises->pais_nomb = $request->name;
        $paises->pais_codi = strtoupper(substr($paises->pais_nomb, 0, 3));
        $paises->pais_capi = $request->code;
        $paises->save();

        $paises = DB::table('tb_pais')->select('*')->get();

        return view('pais.index',['paises'=> $paises]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paises = Pais::find($id);
        // $paises = DB::table('tb_pais')
        //     ->orderBy('pais_nomb')
        //     ->get();
        return view('pais.edit',['paises'=> $paises]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);

        $pais->pais_nomb = $request->name;
        //$pais->pais_codi = strtoupper(substr($pais->pais_nomb, 0, 3));
        $pais->pais_capi = $request->code;
        $pais->save();

        $paises = DB::table('tb_pais')
        ->select('*')->get();

        return view('pais.index',['paises'=> $paises]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();

        $paises = DB::table('tb_pais')
        ->select('*')->get();

        return view('pais.index',['paises'=> $paises]);
    }
}
