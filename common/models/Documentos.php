<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_DOCUMENTOS_OFICIALES".
 *
 * @property int $CVE_DOCUMENTO
 * @property string $NOMB_DOCUMENTO
 * @property string $DESC_DOCUMENTO
 * @property string $STATUS_1
 */
class Documentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_DOCUMENTOS_OFICIALES';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_DOCUMENTO'], 'required'],
            [['CVE_DOCUMENTO'], 'integer'],
            [['NOMB_DOCUMENTO', 'DESC_DOCUMENTO'], 'string', 'max' => 50],
            [['STATUS_1'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_DOCUMENTO' => 'Cve  Documento',
            'NOMB_DOCUMENTO' => 'Nomb  Documento',
            'DESC_DOCUMENTO' => 'Desc  Documento',
            'STATUS_1' => 'Status 1',
        ];
    }
}
