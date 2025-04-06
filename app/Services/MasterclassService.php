<?php

namespace App\Services;

use App\Models\Masterclass;
use App\Http\Requests\MasterclassRequest;

class MasterclassService
{
    /**
     * Store a new masterclass
     *
     * @param array $data
     * @return Masterclass
     */
    public function storeMasterclass(array $data): Masterclass
    {
        return Masterclass::create($data);
    }
}
