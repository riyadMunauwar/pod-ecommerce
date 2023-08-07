<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;
use LaracraftTech\LaravelDateScopes\DateScopes;
use App\Models\Product;

class Design extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use DateScopes;



    // relationship
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }



    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('design')
             ->singleFile();
        //     ->registerMediaConversions(function (Media $media = null) {
            
        //     $this->addMediaConversion('thumb')
        //         ->width(150)
        //         ->height(150)
        //         ->format('webp')
        //         ->quality(80);

        //     $this->addMediaConversion('small')
        //         ->width(640)
        //         ->height(640)
        //         ->format('webp')
        //         ->quality(80);

        //     $this->addMediaConversion('medium')
        //         ->width(800)
        //         ->height(800)
        //         ->format('webp')
        //         ->quality(80);  
        // });

        $this->addMediaCollection('resources');
        //     ->registerMediaConversions(function (Media $media = null) {
            
        //     $this->addMediaConversion('thumb')
        //         ->width(150)
        //         ->height(150)
        //         ->format('webp')
        //         ->quality(80);

        //     $this->addMediaConversion('small')
        //         ->width(640)
        //         ->height(640)
        //         ->format('webp')
        //         ->quality(80);

        //     $this->addMediaConversion('medium')
        //         ->width(800)
        //         ->height(800)
        //         ->format('webp')
        //         ->quality(80);  

        // });
    }


    public function designUrl()
    {
        if($this->hasMedia('design')){
            return $this->getFirstMedia('design')->getUrl();
        }

        return '';
    }
}
