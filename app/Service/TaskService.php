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
     * Return a task by id
     *
     * @param $id
     * @return mixed
     */
    public function findBy($id)
    {
        return Tasks::findOrFail($id);
    }

    /**
     * Create a new task
     *
     * @param $data
     * @return mixed
     */
    public function save($data)
    {
       return Tasks::create([
            'name'        => $data['t_name'],
            'description' => $data['t_description'],
            'user_id'     => Auth::user()->id
        ]);
    }

    /**
     * @param $data
     * @param $user_id
     * @return mixed
     */
    public function updateTask($data, $user_id)
    {
        return Tasks::where('id', $user_id)
                ->update([
                    'name' => $data['t_name'],
                    'description' => $data['t_description']
                 ]);
    }

    /**
     * Delete a task
     *
     * @param $id
     */
    public function delete($id)
    {
        $task = Tasks::find($id);

        $task->delete();
    }
}