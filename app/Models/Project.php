<?php

namespace App\Models;

use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model implements CanVisit
{
    use HasFactory, SoftDeletes, HasVisits;

    protected $guarded = [];

    /**
     * Get the user that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the project_images for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project_images(): HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     * Get all of the transactions for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    protected function casts(): array
    {
        return [
            'features' => 'json',
            'technologies' => 'json',
            'buy_packages' => 'json'
        ];
    }

    public function getFeaturesAsStringAttribute()
    {
        return implode(';', json_decode($this->features));
    }

    public function getTechnologiesAsStringAttribute()
    {
        return implode(';', json_decode($this->technologies));
    }

    public function getPackagesAsStringAttribute()
    {
        return implode(';', json_decode($this->buy_packages));
    }

    public function getTrimTitleAttribute()
    {
        $string = $this->title;
        if (strlen($this->title) > 25) {
            // Trim the string to the specified length and add ellipsis
            $string = substr($this->title, 0, 25) . '...';
        }
        
        return $string;
    }
}
