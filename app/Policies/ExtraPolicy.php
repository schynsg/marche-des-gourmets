<?php

namespace App\Policies;

use App\Models\Extra;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExtraPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Extra  $extra
     * @return mixed
     */
    public function view(User $user, Extra $extra)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Extra  $extra
     * @return mixed
     */
    public function update(User $user, Extra $extra)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Extra  $extra
     * @return mixed
     */
    public function delete(User $user, Extra $extra)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Extra  $extra
     * @return mixed
     */
    public function restore(User $user, Extra $extra)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Extra  $extra
     * @return mixed
     */
    public function forceDelete(User $user, Extra $extra)
    {
        //
    }
}
