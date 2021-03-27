<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\modules\crud\models\base;

use Yii;

/**
 * This is the base-model class for table "auth_item_child".
 *
 * @property string $parent
 * @property string $child
 *
 * @property \app\modules\crud\models\AuthItem $parent0
 * @property \app\modules\crud\models\AuthItem $child0
 * @property string $aliasModel
 */
abstract class AuthItemChild extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_item_child';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'child'], 'required'],
            [['parent', 'child'], 'string', 'max' => 64],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => \app\modules\crud\models\AuthItem::className(), 'targetAttribute' => ['parent' => 'name']],
            [['child'], 'exist', 'skipOnError' => true, 'targetClass' => \app\modules\crud\models\AuthItem::className(), 'targetAttribute' => ['child' => 'name']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent' => Yii::t('models', 'Parent'),
            'child' => Yii::t('models', 'Child'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(\app\modules\crud\models\AuthItem::className(), ['name' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild0()
    {
        return $this->hasOne(\app\modules\crud\models\AuthItem::className(), ['name' => 'child']);
    }


    
    /**
     * @inheritdoc
     * @return \app\models\query\AuthItemChildQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\AuthItemChildQuery(get_called_class());
    }


}
