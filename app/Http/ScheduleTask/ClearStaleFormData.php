<?php

namespace App\Http\ScheduledTask;

use App\Models\form;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClearStaleFormData
{
    public function execute(){
        form::where('created_at', '<', Carbon::now()->subDay())->delete();
    }

}