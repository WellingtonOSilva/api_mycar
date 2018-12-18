<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_user
 * @property string $permission
 * @property string $email
 * @property string $name
 * @property string $password
 * @property TblPermission $tblPermission
 */
class Users extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbl_users';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * @var array
     */
    protected $fillable = ['permission', 'email', 'name', 'password'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblPermission()
    {
        return $this->belongsTo('App\TblPermission', 'permission', 'id_permission');
    }
}
