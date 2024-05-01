<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ResultsTheme extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();

        static::creating(function ($theme) {
            $theme->slug = Str::slug($theme->theme);
        });

        static::updating(function ($theme) {
            $theme->slug = Str::slug($theme->theme);
        });
    }
}
