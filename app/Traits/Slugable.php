<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    /**
     * Boot the trait and automatically generate a slug when creating or updating the model.
     */
    protected static function bootSlugable()
    {
        static::creating(function ($model) {
            $model->generateSlug();
        });

        static::updating(function ($model) {
            $model->generateSlug();
        });
    }

    /**
     * Generate slug based on the "title" or any other attribute.
     */
    public function generateSlug()
    {
        if (!$this->slug || $this->isDirty('title')) {
            $slug = Str::slug($this->title);
            // Ensure uniqueness of slug by appending a number if necessary
            $this->slug = $this->generateUniqueSlug($slug);
        }
    }

    /**
     * Generate a unique slug.
     *
     * @param string $slug
     * @return string
     */
    protected function generateUniqueSlug($slug)
    {
        $originalSlug = $slug;
        $count = 1;

        while ($this->slugExists($slug)) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    /**
     * Check if the slug already exists in the database.
     *
     * @param string $slug
     * @return bool
     */
    protected function slugExists($slug)
    {
        return static::where('slug', $slug)->exists();
    }
}
