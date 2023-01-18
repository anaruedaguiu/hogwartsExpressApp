<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TrainRoute;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TrainRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $trainRoutes = TrainRoute::orderBy('date', 'desc')->paginate(6);
        return view('home', compact('trainRoutes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('createTrainRoute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $trainRoute = request()->except('_token');

        TrainRoute::create($trainRoute);

        return redirect()->route('home');
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
        $trainRoute = TrainRoute::find($id);

        return view('showTrainRoute', compact('trainRoute'));
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
        $trainRoute = TrainRoute::find($id);

        return view('editTrainRoute', compact('trainRoute'));
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
        $trainRoute = request()->except('_token', '_method');

        TrainRoute::where('id', '=', $id)->update($trainRoute);

        return redirect()->route('home');
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
        TrainRoute::destroy($id);

        return redirect()->route('home');
    }

    public function inscribe($id){

        $trainRoute = TrainRoute::find($id);
        $user = User::find(Auth::id());

        $user->trainRoute()->attach($trainRoute);

        return redirect()->route('home');
    }

    public function unscribe($id){

        $trainRoute = TrainRoute::find($id);
        $user = User::find(Auth::id());

        $user->trainRoute()->detach($trainRoute);

        return redirect()->route('home');
    }
}

