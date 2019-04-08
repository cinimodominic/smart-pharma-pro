<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Representative extends Model
{
    use HasRoles;

    protected $guard_name = 'web';

    protected $fillable = ['first_name', 'last_name', 'company_name', 'email', 'role'];

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
