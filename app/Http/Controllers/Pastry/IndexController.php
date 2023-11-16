<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pastry;

use App\Http\Controllers\Controller;
use App\Responses\Pastry\PastryIndexResponse;

class IndexController extends Controller
{
    public function __invoke(): PastryIndexResponse
    {
        return new PastryIndexResponse();
    }
}
