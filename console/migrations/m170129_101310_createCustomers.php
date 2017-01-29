<?php

use yii\db\Migration;

class m170129_101310_createCustomers extends Migration
{
    public function up()
    {
        $this->createTable('customer', [
            'id'             => $this->primaryKey(),
            'name'           => $this->string()->notNull(),
            'group_id'       => $this->integer()->notNull(),
            'contact_person' => $this->string(),
            'tel'            => $this->string(),
            'mobile'         => $this->string(),
            'status'         => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at'     => $this->timestamp(),
            'updated_at'     => $this->timestamp(),
        ]);

        $this->createTable('customer_address', [
            'id'             => $this->primaryKey(),
            'customer_id'    => $this->integer()->notNull(),
            'city'           => $this->string()->notNull(),
            'sub_district'   => $this->string(),
            'geo'            => $this->string(), #'lat/lon'
            'address'        => $this->string(), #company Building / Condo / House
            'address_detail' => $this->string(), #Floornumber, Roomnumber, Street / Road, Subsoi, howto_find
            'status'         => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at'     => $this->timestamp(),
            'updated_at'     => $this->timestamp(),
        ]);

        $this->createTable('customer_group', [
            'id'         => $this->primaryKey(),
            'name'       => $this->string()->notNull(),
            'status'     => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createTable('customer_note', [
            'id'          => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'note'        => $this->string()->notNull(),
            'creator'     => $this->integer()->notNull(),
            'created_at'  => $this->timestamp(),
            'updated_at'  => $this->timestamp(),
        ]);

        $this->createTable('customer_rate', [
            'id'          => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'rate_id'     => $this->integer()->notNull(),
            'creator'     => $this->integer()->notNull(),
            'created_at'  => $this->timestamp(),
            'updated_at'  => $this->timestamp(),
        ]);

        $this->createTable('customer_credit', [
            'id'          => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'term'        => $this->string()->notNull(),
            'creator'     => $this->integer()->notNull(),
            'created_at'  => $this->timestamp(),
            'updated_at'  => $this->timestamp(),
        ]);

    }

    public function down()
    {
        $this->dropTable('customer');
        $this->dropTable('customer_address');
        $this->dropTable('customer_group');
        $this->dropTable('customer_note');
        $this->dropTable('customer_rate');
        $this->dropTable('customer_credit');
    }

}
