<?php

namespace CoderStudios\Models;

use CoderStudios\Models\Base\BaseUsers;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Users extends BaseUsers implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
}