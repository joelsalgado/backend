<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 22/01/2018
 * Time: 06:52 PM
 */

namespace frontend\widgets\Apartados;

use common\models\Metadato;
use Yii;
use yii\base\Widget;


class Apartados extends Widget
{
    public $id;
    public $mun;
    public $tipo;
    public $apartado;
    public $accion;
    public $a1;
    public $a2;
    public $a3;
    public $a4;
    public $url1 = '';
    public $url2 = '';
    public $url3 = '';
    public $url4 = '';

    public function init()
    {
        $bien =' <i class="fa fa-check-square-o text-success" aria-hidden="true"></i>';
        $mal = ' <i class="fa fa-warning text-danger" aria-hidden="true"></i>';

        if($this->tipo == 1 && $this->accion = 'c'){
            $this->a2 = $mal;
            $this->a3 = $mal;
            $this->a4 = $mal;
        }

        if($this->tipo == 2 && $this->accion = 'c'){
            $this->a1 = $bien;
            $this->url1 = ['metadato/municipio'];
            $this->a3 = $mal;
            $this->a4 = $mal;
        }


        if($this->apartado){
            $this->a1 = ($this->apartado->APARTADO2 == 1) ? $bien : $mal;
            $this->a2 = ($this->apartado->APARTADO2 == 1) ? $bien : $mal;
            $this->a3 = ($this->apartado->APARTADO3 == 1) ? $bien : $mal;
            $this->a4 = ($this->apartado->APARTADO4 == 1) ? $bien : $mal;

            $this->url1 = ($this->apartado->APARTADO2 == 1) ? ['/metadato/municipio', 'id' => $this->id]: '';
            $this->url2 = ($this->apartado->APARTADO2 == 1) ? ['/metadato/update', 'id' => $this->id, 'mun' => $this->mun]: '';
            $this->url3 = ($this->apartado->APARTADO3 == 1) ? ['/socioeconomico/update', 'id' => $this->id]: '';
            $this->url4 = ($this->apartado->APARTADO4 == 1) ? ['/familia', 'id' => $this->id]: '';

        }


        parent::init();
    }


    public function run()
    {
        $regular = ' <i class="fa fa-edit text-warning" aria-hidden="true"></i>';
        return $this->render('index', [
            "id" => $this->id,
            "mun" => $this->mun,
            "tipo" => $this->tipo,
            'regular' => $regular,
            'a1' => $this->a1,
            'a2' => $this->a2,
            'a3' => $this->a3,
            'a4' => $this->a4,
            'url1' => $this->url1,
            'url2' => $this->url2,
            'url3' => $this->url3,
            'url4' => $this->url4,

        ]);
    }
}