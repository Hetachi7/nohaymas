<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Imagen_Hsitoria;
use App\Models\User;

class ImagenHsitoriaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Imagen_Hsitoria $imagenHsitoria): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Imagen_Hsitoria $imagenHsitoria): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Imagen_Hsitoria $imagenHsitoria): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Imagen_Hsitoria $imagenHsitoria): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Imagen_Hsitoria $imagenHsitoria): bool
    {
        //
    }
}
