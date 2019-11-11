<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    const CREATED_AT = 'create_ts';

    const UPDATED_AT = 'last_ts';

    public $timestamps = true;

    protected $dateFormat = 'U';

    protected $table = 'workspaces';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'creation_date', 'last_update'
    ];
}
