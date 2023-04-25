<?php

namespace App\Http\Resources\API\V1\WebsiteSubscribers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreMethodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'email_address' => $this->email_address,
            'website_domain' => $this->website_domain
        ];

    }
}
