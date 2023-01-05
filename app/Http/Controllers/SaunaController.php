<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Sauna;
use Illuminate\Support\Facades\Auth;


class SaunaController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_sauna = Sauna::where('user_id', Auth::id())->latest()->first();
        $saunas = Sauna::where('user_id', Auth::id())->get();

        return view(
            'sauna.index',
            ['saunas' => $saunas, 'last_sauna' => $last_sauna ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sauna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sauna = new Sauna;

        $sauna->fill($request->all())->save();

        return redirect()->route('sauna.index')->with('message','サウナを登録しました');
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
        $sauna = Sauna::find($id);
        return view('sauna.edit' ,[
            'sauna' => $sauna
        ]);
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
        $sauna = Sauna::find($id);
        $sauna->fill($request->all())->save();

        return redirect()->route('sauna.index')->with('message','登録しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
