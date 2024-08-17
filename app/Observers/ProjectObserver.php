<?php
 
namespace App\Observers;
 
use App\Models\User;
use App\Models\Stat;
 
class ProjectObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(Project $project): void
    {
        // ...
        Stat::increment('projects_count');
    }
}
