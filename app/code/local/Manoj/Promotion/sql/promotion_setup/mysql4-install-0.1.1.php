<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('salesrule'),
        'new_field',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_SMALLINT,
            'length' => 6,
            'nullable' => false,
            'default' => 0,
            'comment' => 'Is new_field'
        )
    );

$installer->endSetup();