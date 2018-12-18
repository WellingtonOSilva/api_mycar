<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_permission
 * @property string $details
 * @property TblUser[] $tblUsers
 */
class Permissions extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_permissions';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_permission';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['details'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tblUsers()
    {
        return $this->hasMany('App\TblUser', 'permission', 'id_permission');
    }
}
