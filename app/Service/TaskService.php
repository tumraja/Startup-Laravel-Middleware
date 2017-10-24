<?php
namespace App\Service;

use App\Tasks;
use Illuminate\Support\Facades\Auth;

class TaskService
{
    /**
     * Return all tasks for the user
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return Auth::user()->tasks;
    }

    /**
     * Create a new task
     *
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        $task = Tasks::create([
            'name'        => $data('name'),
            'description' => $data('description'),
            'user_id'     => Auth::user()->id
        ]);

        return $task;
    }

}