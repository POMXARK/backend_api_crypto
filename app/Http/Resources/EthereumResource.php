<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * Pattern DTO.
 */
class EthereumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            $this->attributes((array)'Timestamp'),
            $this->attributes((array)'date'),
            //$this->attributes('Symbol'),
            $this->attributes((array)'Open'),
            $this->attributes((array)'High'),
            $this->attributes((array)'Low'),
            $this->attributes((array)'Close'),
            $this->attributes((array)'ETH'),
            $this->attributes((array)'USD'),
        ] ;

    }
}
