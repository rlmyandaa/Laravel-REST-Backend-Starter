<?php

namespace App\Http\Controllers\Api;

use App\Models\Orm;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrmController extends Controller
{
    protected $model = Orm::class;

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }

    public function sortableBy(): array
    {
        return ['name', 'company', 'phone', 'address'];
    }
    
    public function filterableBy(): array
    {
        return ['name', 'company', 'phone', 'address'];
    }

    public function searchableBy(): array
    {
        return ['name', 'company', 'phone', 'address'];
    }
}
