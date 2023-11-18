<?php

declare(strict_types=1);

namespace App\Responses\Pastry;

use App\Models\Pastry;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PastryIndexResponse implements Responsable
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return new JsonResponse(
            data: Pastry::all(),
            status: 200,
        );
    }
}
