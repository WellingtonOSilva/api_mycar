<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_passenger
 * @property int $id_payment
 * @property string $name
 * @property string $cpf
 * @property string $birth
 * @property string $sex
 * @property string $email
 * @property string $phone
 * @property TblPaymentMethod $tblPaymentMethod
 * @property TblRace[] $tblRaces
 */
class Passenger extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_passenger';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_passenger';

    /**
     * @var array
     */
    protected $fillable = ['id_payment', 'name', 'cpf', 'birth', 'sex', 'email', 'phone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo('App\Model\Payment', 'id_payment', 'id_payment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function races()
    {
        return $this->hasMany('App\Model\Races', 'id_passenger', 'id_passenger');
    }
}
