<?php

namespace Emizentech\Banner\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;
/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        if (!$installer->tableExists('banner')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('banner')
            )->addColumn(
                    'banner_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true],
                    'banner ID'
                )->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Title'
                )->addColumn(
                    'group',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Group'
                )->addColumn(
                    'image',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Image'
                )->addColumn(
                    'link',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Link'
                )->addColumn(
                    'target',
                    Table::TYPE_TEXT,
                    10,
                    ['nullable' => false],
                    'Target'
                )
                ->addColumn(
                    'is_active',
                    Table::TYPE_SMALLINT,
                    null,
                    [],
                    'Active Status'
                )->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [],
                    'Creation Time'
                )->setComment(
                    'Banner Table'
                );
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();

    }
}