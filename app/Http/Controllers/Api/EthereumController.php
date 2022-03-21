<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EthereumResource;
use App\Models\Bittrex_ETHUSD_d;
use App\Models\Ethereum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EthereumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date_start =    ($request->input('date_start')) ;
        $date_end =   ($request->input('date_end')) ;
        if (!$date_start or !$date_end){
            return EthereumResource::collection(Bittrex_ETHUSD_d::all());
        } else {
            return EthereumResource::collection(Bittrex_ETHUSD_d::all()->whereBetween('date',array($date_start,$date_end))->all());
        }

        //
        //if (!$date_start or !$date_end){
        //
        //} else {
        //
        //}

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        //return  $request->input('date');
        //return new EthereumResource(Ethereum::all()->where('date', )->first());

        //return new $request- . EthereumResource(Ethereum::all()->where('date',$date )->first());
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
}
