<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;

    protected $fillable = ['name', 'email', 'address', 'website'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
