<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EthereumResource;
use App\Models\Desk;
use App\Models\Ethereum;
use Illuminate\Http\Request;

class EthereumController extends Controller
{
    public function index()
    {
        return EthereumResource::collection(Ethereum::all());
    }
}
