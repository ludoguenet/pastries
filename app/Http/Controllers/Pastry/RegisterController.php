<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pastry;

use App\Http\Controllers\Controller;
use App\Models\Pastry;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function __invoke(Pastry $pastry): JsonResponse
    {
        return new JsonResponse([
            'message' => 'You have registered successfuly',
            'success' => true,
        ]);
    }
}
