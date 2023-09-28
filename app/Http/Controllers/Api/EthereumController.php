<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EthereumResource;
use App\Models\Bittrex_ETHUSD_d;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class EthereumController extends Controller
{
    /**
     * вернуть данные между датами или всё
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $date_start = ($request->input('date_start'));
        $date_end = ($request->input('date_end'));

        if (!$date_start or !$date_end) {
            return EthereumResource::collection(Bittrex_ETHUSD_d::limit(20000)->orderBy('Timestamp','asc')->get()); //20000
        } else {
            return EthereumResource::collection(
                Bittrex_ETHUSD_d::whereBetween('date',array($date_start,$date_end))->orderBy('Timestamp','asc')->limit(20000)->get()
            );
        }
    }
}

// ?date_start=2017-11-14&date_end=2017-11-15
