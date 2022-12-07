<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;
use App\Models\Sauna;


class TimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'timer.index'
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timer.sauna_start');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timer = new Timer;

        // $timer->fill($request->all())->save();
//sauna_startのviewに飛ばす？
        return view('timer.sauna_start'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('timer.show',[
            'timer' => Timer::findOrFail($id),
            'sauna' => Sauna::findOrFail(Timer::findOrFail($id)->sauna_id),
        ]);

    }
       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function sauna_start(Request $request)
    {
        $timer = new Timer();
        $timer->fill($request->all())->save;
        
     //   return view('timer.sauna_end',['timer' => $timer]);
        return redirect('timer.sauna_end');
    }

    public function sauna_end()
    {
        $timer = Timer::where('$id' , '=', '$request->id')->update([
            'sauna_end' => Datetime('now'),
        ]);
        $timer->sauna_end->save();
        return view(
            'timer.sauna_end',
            ['timer' => $timer]
            );
    }

    public function update1()
    {

    }
    public function water_start()
    {

    }
    public function update2()
    {

    }
    public function water_end()
    {

    }
    public function update3()
    {

    }
    public function outside_start()
    {

    }
    public function update4()
    {

    }
    public function outside_end()
    {

    }
    public function update5()
    {

    }

}
