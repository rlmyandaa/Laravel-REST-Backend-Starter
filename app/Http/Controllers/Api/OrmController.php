<?php

namespace App\Http\Controllers\Api;

use App\Models\Orm;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class OrmController extends Controller
{
    protected $model = Orm::class;
    use DisableAuthorization;
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
