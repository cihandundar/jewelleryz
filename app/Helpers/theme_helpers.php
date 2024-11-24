<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

function dataset($name)
{
    try {
        $data = require database_path("data_sets/{$name}.php");
        return Arr::wrap($data);
    } catch (\Throwable $th) {
        Log::error("Dataset Loading failed". $th->getMessage());
        return [];
    }
}
