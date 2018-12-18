<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_payment
 * @property string $payment
 * @property TblPassenger[] $tblPassengers
 */
class Payment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_payment_methods';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_payment';

    /**
     * @var array
     */
    protected $fillable = ['payment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tblPassengers()
    {
        return $this->hasMany('App\TblPassenger', 'id_payment', 'id_payment');
    }
}
