<?php

namespace App\Traits;

trait HasCan
{
    public function getCanAttribute()
    {
        $currentUser = request()->user();
        return [
            'view' => $currentUser->can('view', $this),
            'update' => $currentUser->can('view', $this),
            'delete' => $currentUser->can('view', $this),
        ];
    }
}
