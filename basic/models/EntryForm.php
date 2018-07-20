<?php
/**
 * Created by PhpStorm.
 * User: lizabonka
 * Date: 19.07.18
 * Time: 12:26
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}