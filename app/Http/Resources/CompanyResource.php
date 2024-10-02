<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_en' => $this->name_en,
            'description' => $this->description,
            'description_en' => $this->description_en,
            'logo' => $this->logo,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'phone_number' => $this->phone_number,
            'fax_number' => $this->fax_number,
            'license' => $this->license,
            'website_url' => $this->website_url,
            'social_media' => json_decode($this->social_media),
            'address' => $this->address,
        ];
    }
}
