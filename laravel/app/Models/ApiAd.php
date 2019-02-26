<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiAd extends Model
{
    protected $fillable = [
        'api_id', 'api_created_at', 'api_updated_at', 'date_start', 'date_end', 'admin_name', 'show_in_list',
        'templates_ads_id', 'templates_forms_id', 'form_id', 'projects_id', 'code', 'expiring_notification',
        'created_by', 'categories', 'positions', 'cities', 'exports', 'content'
    ];
}
