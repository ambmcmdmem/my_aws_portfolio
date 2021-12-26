<?php

namespace App\Policies;

use App\Models\ChatContent;
use App\Models\User;
use App\Models\Production;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChatContentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ChatContent $chatContent)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ChatContent $chatContent)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ChatContent $chatContent)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ChatContent $chatContent)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ChatContent $chatContent)
    {
        //
    }

    public function isNowProduction(Production $production, ChatContent $chatContent) {
        return $production->id === $chatContent->production_id;
    }
}
