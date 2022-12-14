<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DateTime;
use Auth;

use App\Models\Timer;
use App\Models\Sauna;






class TimerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauna = Sauna::where('user_id', Auth::user()->id)->latest();
        return view(
            'timer.index',
            ['sauna' => $sauna]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $timer = new Timer;
        $timer->sauna_id  = $request->sauna_id;
        $timer->sauna_end_time  = $request->sauna_end_time;
        $timer->water_start_time  = $request->water_start_time;
        $timer->water_end_time  = $request->water_end_time;
        $timer->outside_start_time  = $request->outside_start_time;
        $timer->outside_end_time  = $request->outside_end_time;
        $timer->user_id  = $request->user_id;
        $timer->sauna_start_time  = $request->sauna_start_time;
  
        $timer->save();
       // return view('timer.sauna_end',['id'=>$timer->id]);
        return redirect()->route('sauna_end',$timer->id);
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
        return view('timer.sauna_end'
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
        $timer = Timer::find($id);
        $timer->delete();
        return redirect()->route('logs')->with('message','削除しました');
    }

    public function sauna_end($id)
    {
        $timer = Timer::find($id);
        $sauna = Sauna::latest()->first();

        return view(
            'timer.sauna_end',
            ['timer' => $timer, 'sauna' => $sauna]

        );
 
    }

    public function update1(Request $request)
    {
        $timer = Timer::find($request->id);
        $timer->sauna_end_time = $request->sauna_end_time;
        $timer->save();
        return view(
            'timer.water_start',
            ['timer' => $timer]
        );
        //return redirect()->route('water_start',$timer->id);

    }
    public function water_start(Request $request)
    {
        $timer = Timer::find($request->id);
        $timer->water_start_time  = $request->water_start_time;
        $timer->save();
        return redirect()->route('water_end',$timer->id);
    }

    public function water_end($id)
    {
        $timer = Timer::find($id);
        $sauna = Sauna::latest()->first();

        return view(
            'timer.water_end',
            ['timer' => $timer, 'sauna' => $sauna]

        );
    }
    public function update2(Request $request)
    {
        $timer = Timer::find($request->id);
        $timer->water_end_time = $request->water_end_time;
        $timer->save();
        return view(
            'timer.outside_start',
            ['timer' => $timer]
        );
    }

    public function outside_start(Request $request)
    {
        $timer = Timer::find($request->id);
        $timer->outside_start_time  = $request->outside_start_time;
        $timer->save();
        return redirect()->route('outside_end',$timer->id);

    }

    public function outside_end($id)
    {
        $timer = Timer::find($id);
        $sauna = Sauna::latest()->first();

        return view(
            'timer.outside_end',
            ['timer' => $timer, 'sauna' => $sauna]

        );
    }
    public function update3(Request $request)
    {
        $timer = Timer::find($request->id);
        $timer->outside_end_time = $request->outside_end_time;
        $timer->save();
        return redirect()->route('logs');

    }


}
