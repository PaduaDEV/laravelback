<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class api10Policy {

    use HandlesAuthorization;

    
    public function viewAny()
    {
        return true;
    }

    public function view()

    {
        return true;
    }
    public function create()
    {
        return true;
    }
    public function update()
    {
        return true;
    }
    public function delete()
    {
        return true;
    }
}