<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_logo_big_text',
        'site_logo_small_text',
        'address',
        'google_maps_link',
        'email',
        'phone_number_1',
        'phone_number_2',
        'facebook_acc',
        'instagram_acc',
        'twitter_acc',
        'linkedin_acc',
    ];
}
