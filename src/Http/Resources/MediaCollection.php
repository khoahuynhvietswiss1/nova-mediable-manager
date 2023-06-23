<?php

namespace Khoahuynhvietswiss\NovaMediableManager\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MediaCollection extends ResourceCollection
{

    public $collects = 'Khoahuynhvietswiss\NovaMediableManager\Http\Resources\Media';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;
    }
}
