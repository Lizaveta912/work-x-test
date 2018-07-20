<?php
/**
 * Created by PhpStorm.
 * User: lizabonka
 * Date: 20.07.18
 * Time: 16:45
 */
namespace app\components;

use yii\base\Widget;

class HiWidget extends Widget
{
    public function run()
    {
        return '<h2>Hello!</h2>';
    }
}