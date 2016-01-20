<?php
namespace Emizentech\Banner\Block\Widget;

class BannerSlider extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
	 /**
     * @var \Emizentech\Banner\Model\bannerFactory
     */
    protected $_bannerFactory;

    protected $_template = 'widget/bannerslider.phtml';
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
         \Emizentech\Banner\Model\BannerFactory $bannerFactory
    ) {
    	 $this->_bannerFactory = $bannerFactory;
        parent::__construct($context);
    }
    
    public function getBannerImages(){
    	$collection = $this->_bannerFactory->create()->getCollection();
    	$group = $this->getData('group');
    	$collection->addFieldToFilter('group' ,$group );
    	$collection->addFieldToFilter('is_active' ,1 );
    	return $collection;
    }
    public function getImageMediaPath(){
    	return $this->getUrl('pub/media',['_secure' => $this->getRequest()->isSecure()]);
    }
}