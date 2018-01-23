<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 22/01/2018
 * Time: 12:13 PM
 */

namespace frontend\models;

use yii\base\Model;

class Municipios extends Model
{
    public $mun;
    public function rules()
    {
        return [
            [['mun'], 'required'],
            ['mun', 'integer'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'mun' => 'Municipio',
        ];
    }
}