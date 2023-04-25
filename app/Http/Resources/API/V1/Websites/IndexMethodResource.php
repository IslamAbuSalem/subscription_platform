<?php

namespace App\Http\Resources\API\V1\Websites;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexMethodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'website_domain' => $this->website_domain,
            'id' => $this->id
        ];
    }
}
