<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_race
 * @property int $id_driver
 * @property int $id_passenger
 * @property string $departure
 * @property string $destination
 * @property float $price
 * @property int $id_payment
 * @property TblDriver $tblDriver
 * @property TblPassenger $tblPassenger
 */
class Races extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_races';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_race';

    /**
     * @var array
     */
    protected $fillable = ['id_driver', 'id_passenger', 'departure', 'destination', 'price', 'id_payment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblDriver()
    {
        return $this->belongsTo('App\TblDriver', 'id_driver', 'id_driver');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblPassenger()
    {
        return $this->belongsTo('App\TblPassenger', 'id_passenger', 'id_passenger');
    }
}
