<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_SALARIOS}}".
 *
 * @property int $CVE_SALARIO
 * @property string $AREA_GEOGRAFICA
 * @property string $DESC_SALARIO
 * @property string $ZONA
 * @property int $CVE_PROGRAMA
 * @property int $SALARIO_INICIAL
 * @property int $SALARIO_FINAL
 * @property int $SALARIO_MINIMO
 * @property string $FECHA_REG
 */
class Salarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_SALARIOS}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_SALARIO'], 'required'],
            [['CVE_SALARIO', 'CVE_PROGRAMA', 'SALARIO_INICIAL', 'SALARIO_FINAL', 'SALARIO_MINIMO'], 'integer'],
            [['FECHA_REG'], 'string'],
            [['AREA_GEOGRAFICA'], 'string', 'max' => 1],
            [['DESC_SALARIO'], 'string', 'max' => 80],
            [['ZONA'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_SALARIO' => 'Cve  Salario',
            'AREA_GEOGRAFICA' => 'Area  Geografica',
            'DESC_SALARIO' => 'Desc  Salario',
            'ZONA' => 'Zona',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'SALARIO_INICIAL' => 'Salario  Inicial',
            'SALARIO_FINAL' => 'Salario  Final',
            'SALARIO_MINIMO' => 'Salario  Minimo',
            'FECHA_REG' => 'Fecha  Reg',
        ];
    }

    public static function cacheSalarios(){
        $cacheName = 'SalariosCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $salarios = Salarios::find()
                ->select(['CVE_SALARIO', 'DESC_SALARIO'])
                ->orderBy(['CVE_SALARIO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $salarios);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
