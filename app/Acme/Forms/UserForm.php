<?php
/**
 * Created by PhpStorm.
 * User: Dak
 * Date: 5/12/2014
 * Time: 3:48 AM
 */

namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class UserForm extends FormValidator {
    protected $rules = array(
        'email'=>'required|email|max:250|unique:users',
        'password'=>'required|max:250|confirmed',
        'first_name'=>'required|max:250',
        'last_name'=>'required|max:250'
    );
    protected $rules_update = array(
        'first_name'=>'required|max:250',
        'last_name'=>'required|max:250',
    );
    public function CreateValidate($input){
        return $this->validate($input);
    }
    public function UpdateValidate($input){
        $this->rules = $this->rules_update;
        return $this->validate($input);
    }
} 