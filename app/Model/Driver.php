<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_driver
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $cpf
 * @property string $birth
 * @property string $car
 * @property int $status
 * @property string $sex
 * @property string $brand
 * @property TblRace[] $tblRaces
 */
class Driver extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_driver';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_driver';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'cpf', 'birth', 'car', 'status', 'sex', 'brand'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tblRaces()
    {
        return $this->hasMany('App\TblRace', 'id_driver', 'id_driver');
    }
}
