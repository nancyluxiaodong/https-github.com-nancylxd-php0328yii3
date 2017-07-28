<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods`.
 */
class m170722_022925_create_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods', [
            'id'                => $this->primaryKey(),
            'name'              => $this->string(255)->notNull()->comment('商品名称'),
            'sn'                => $this->string(20)->notNull()->unique()->comment('货号'),
            'logo'              => $this->string(),
            'goods_category_id' => $this->integer()->unsigned()->notNull()->comment('商品分类'),
            'brand_id'          => $this->integer()->unsigned()->notNull()->comment('品牌分类'),
            'market_price'      => $this->decimal(10, 2)->notNull()->comment('市场价格'),
            'shop_price'        => $this->decimal(10, 2)->notNull()->comment('商品价格'),
            'stock'             => $this->integer()->unsigned()->notNull()->comment('库存'),
            'is_on_sale'        => $this->smallInteger()->notNull()->unsigned()->defaultValue(1)->comment('1在售  0下架'),
            'status'            => $this->smallInteger()->notNull()->defaultValue(1)->comment('1正常 0回收站'),
            'sort'              => $this->integer()->unsigned()->comment('排序'),
            'create_time'        => $this->integer()->comment('添加时间'),
            'view_times'         => $this->integer()->comment('浏览次数'),
        ]);
        $this->createTable('goods_intro', [
            'goods_id' => $this->primaryKey(),
            'content'  => $this->text()->comment('商品详情'),
        ]);
        $this->createTable('goods_gallery', [
            'id'       => $this->primaryKey(),
            'goods_id' => $this->integer()->unsigned()->comment('商品id'),
            'path'     => $this->string()->notNull()->comment('图片地址')
        ]);

        $this->createTable('goods_day_count', [
            'day' => $this->date()->comment('日期'),
            'count' => $this->integer()->notNull()->defaultValue(0)->comment('商品数'),
        ]);
        $this->addPrimaryKey('day','goods_day_count','day');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods');
        $this->dropTable('goods_intro');
        $this->dropTable('goods_gallery');

        $this->dropTable('goods_day_count');
    }
}
