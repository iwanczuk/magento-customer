<?php

/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('sales/order'), 'page_views', array(
        'type'     => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'unsigned' => true,
        'nullable' => false,
        'default'  => '0',
        'comment'  => 'Page Views'
    ));

$installer->getConnection()
    ->addColumn($installer->getTable('sales/quote'), 'page_views', array(
        'type'     => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'unsigned' => true,
        'nullable' => false,
        'default'  => '0',
        'comment'  => 'Page Views'
    ));

$installer->getConnection()
    ->addColumn($installer->getTable('sales/order_grid'), 'page_views', array(
        'type'     => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'unsigned' => true,
        'nullable' => false,
        'default'  => '0',
        'comment'  => 'Page Views',
    ));

$installer->endSetup();
