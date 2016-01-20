<?php
namespace Emizentech\Banner\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Emizentech\Banner\Model\ResourceModel\Banner');
    }
}
?>