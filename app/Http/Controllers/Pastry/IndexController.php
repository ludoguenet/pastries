<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pastry;

use App\Http\Controllers\Controller;
use App\Models\Pastry;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Pastry::all();
    }
}
