<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'website'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
