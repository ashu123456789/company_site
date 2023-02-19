<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProjectEnquiry extends Model
{
    use HasFactory;
    protected $table = 'project_enquires';
    protected $fillable = ['name','phone','email','interested','message','budget','skype','subject'];

    public function ip_address()
    {
        return $this->belongsTo('App\Models\IpAddress', 'enquiry_id');
    }

    public function getImageAttribute($value)
    {
        if($value != null && $value != "" && Storage::exists('public/enquiry'.'/'.$value)){
            return asset('/storage/enquiry'.'/'.$value);
        }
    }
}
