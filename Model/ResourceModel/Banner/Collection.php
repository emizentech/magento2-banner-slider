<?php
namespace Emizentech\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Emizentech\Banner\Model\Banner', 'Emizentech\Banner\Model\ResourceModel\Banner');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>