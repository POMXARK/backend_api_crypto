<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EthereumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            $this->attributes('Timestamp'),
            $this->attributes('date'),
            //$this->attributes('Symbol'),
            $this->attributes('Open'),
            $this->attributes('High'),
            $this->attributes('Low'),
            $this->attributes('Close'),
            $this->attributes('ETH'),
            $this->attributes('USD'),
        ] ;

    }
}
