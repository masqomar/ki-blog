<?php

namespace Modules\Video\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cohensive\OEmbed\Facades\OEmbed;

class Video extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'videos';

    public function getVideoUrlAttribute($value)
     {
        $embed = OEmbed::get($value);
        if ($embed) {
            return $embed->html(['width' => 240, 'height' => 240]);
        }
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Video\database\factories\VideoFactory::new();
    }
}
