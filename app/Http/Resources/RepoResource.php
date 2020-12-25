<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RepoResource extends JsonResource
{
    public static $wrap = 'types';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this['full_name'],
            'language' => $this['language'],
            'owner' => $this['owner']['login']
        ];
    }
}
