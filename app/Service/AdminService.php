<?php
/**
 * Created by PhpStorm.
 * User: tumsime
 * Date: 10/25/2017
 * Time: 9:20 PM
 */

namespace App\Service;

use App\User;

    class AdminService
    {
    /**
     * Return all users
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
   public function users()
   {
       return User::all();
   }
}