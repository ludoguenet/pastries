<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pastry;

use App\Http\Controllers\Controller;
use App\Models\Pastry;
use App\Responses\Pastry\PastryRefundResponse;

class RefundController extends Controller
{
    public function __invoke(Pastry $pastry): PastryRefundResponse
    {
        return new PastryRefundResponse($pastry);
    }
}
