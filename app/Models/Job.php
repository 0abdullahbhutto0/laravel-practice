<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    //upto you, if you want to update this everytime you want to assign a field with a bit of risk
   // protected $fillable = ['title', 'salary', 'employer_id'];

    //or disable the fillable property
    protected $guarded = [];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
