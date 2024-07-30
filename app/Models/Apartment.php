<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;
use App\Models\Promotion;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id', 
        'name', 
        'slug', 
        'description',
        'rooms', 
        'beds', 
        'bathrooms',
        'square_meters',
        'image_cover',
        'address',
        'longitude',
        'latitude',
        'visibility',
        'delete_at',
        // 'location' da aggiungere eventualmente dopo(vedi logica tom-tom)
    ];

    //Relazione con tabella users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relazione con tabella services
    public function services()
    {
        return $this->belongsToMany(Service::class, 'apartment_service');
    }

    //Relazione con tabella promotions
    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'apartment_promotion')->withPivot('start_date', 'end_date');
    }

    //Relazione con tabella messages
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    //Funzione ByGian per generare slug
    public static function generateSlug($name){
        $slugBase = Str::slug(trim($name), '-');
        $slugs = \App\Models\Apartment::withTrashed()->orderBy('slug')->pluck('slug')->toArray();
        $num = 1;
        $slugNumbers = [];
        
        foreach ($slugs as $slug) {
            if (preg_match('/-(\d+)$/', $slug, $matches)) {
                $slugNumbers[] = intval($matches[1]);
            }
        }

        while (in_array($num, $slugNumbers)) {
            $num++;
        }

        $slug = $slugBase . '-' . $num;

        if(preg_match('/-(\d+)$/', $slugBase, $matches)){
            if(!in_array($matches[1],$slugNumbers)){
                $slug=$slugBase;   
            }
        }
        return $slug;
    }
}
