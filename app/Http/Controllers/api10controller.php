<?php

namespace App\Http\Controllers;

use App\Models\api10;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller as OrionController;


class api10controller extends OrionController
{
   use DisableAuthorization;
   protected $model = api10::class;
}
