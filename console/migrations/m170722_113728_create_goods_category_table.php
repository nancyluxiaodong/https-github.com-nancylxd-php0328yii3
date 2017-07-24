<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods_category`.
 */
class m170722_113728_create_goods_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods_category', [
            'id' => $this->primaryKey(),
            'tree'=>$this->integer(),
            'lft'=>$this->integer(),
            'rgt'=>$this->integer(),
            'depth'=>$this->integer(),
            'name'=>$this->string(50),
            'parent_id'=>$this->integer(),
            'intro'=>$this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods_category');
    }
}
