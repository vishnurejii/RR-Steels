<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class ProductVideo extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'video_url', 'is_active'];

    public function getEmbedUrlAttribute()
    {
        $url = $this->video_url;
        
        // Handle youtu.be links
        if (preg_match('/youtu\.be\/([^\?\/]+)/', $url, $matches)) {
            return "https://www.youtube.com/embed/" . $matches[1];
        }
        
        // Handle youtube.com/watch links
        if (preg_match('/v=([^&]+)/', $url, $matches)) {
            return "https://www.youtube.com/embed/" . $matches[1];
        }

        // Handle youtube.com/shorts/ links
        if (preg_match('/shorts\/([^\?\/]+)/', $url, $matches)) {
            return "https://www.youtube.com/embed/" . $matches[1];
        }

        return $url;
    }
}
