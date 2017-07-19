<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m170718_072504_create_brand_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(50)->comment('����'),
            'intro'=>$this->text()->comment('���'),
            'logo'=>$this->string(100)->comment('ͷ��'),
            'sort'=>$this->integer()->comment('����'),
            'status'=>$this->smallInteger(2)->comment('״̬'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('brand');
    }
}
