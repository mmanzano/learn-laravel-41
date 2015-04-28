<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 28/04/15
 * Time: 12:20
 */

namespace HireMe\Managers;


class RegisterManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        return $rules;
    }

}