<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property integer $id
 * @property string $name
 * @property string $intro
 * @property string $logo
 * @property integer $sort
 * @property integer $status
 */
class Brand extends \yii\db\ActiveRecord
{
    public $logoFile;
    public static function getStatusOptions($hidden_del=true){
        $options = [
            -1=>'删除',0=>'隐藏',1=>'上架',
        ];
        if($hidden_del){
            unset($options[-1]);
        }
        return $options;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intro'], 'string'],
            [['sort', 'status'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['logo'], 'string', 'max' => 100],
            //[['name','logo','sort','intro'],'required'],
           // ['logoFile','file','extensions'=>['jpg','png','gif'],'skipOnEmpty'=>false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'intro' => '简介',
            'logo' => '图片',
            'sort' => '排序',
            'status' => '状态',
        ];
    }
}
