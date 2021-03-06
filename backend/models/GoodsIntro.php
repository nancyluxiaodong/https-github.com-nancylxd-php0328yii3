<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "goods_intro".
 *
 * @property integer $good_id
 * @property string $content
 */
class GoodsIntro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods_intro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['good_id'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'good_id' => '商品id',
            'content' => '商品描述',
        ];
    }
}
