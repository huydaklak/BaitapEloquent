<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nhasanxuat extends Model
{
    //
    protected $table = 'nhasanxuat';
    public $primaryKey = 'maNSX';
    public $incrementing = false;
    public $timestamps = false;
    protected $attributes = [
        'logo' => '',
        'status' => 0
    ];
    protected $fillable = ['ten','logo','status'];

    use HasFactory;
    use SoftDeletes;

}
