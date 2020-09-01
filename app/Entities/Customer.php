<?php

namespace App\Entities;

use App\Http\Utils\Docuemnt;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Customer.
 *
 * @package namespace App\Entities;
 */
class Customer extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'document_type',
        'document_number'
    ];


    public function getDocumentTypeAttribute($type)
    {
        return Docuemnt::getDocument($type);
    }
}
