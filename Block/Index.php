<?php
/**
 * Magento2 AddThis extension for share and follow buttons.
 * @package   Solutionexcel_AddThis
 * @author    SolutionExcel - https://www.solutionexcel.com/ - info@solutionexcel.com
 * @copyright Copyright © 2018 SolutionExcel. All rights reserved.
 * @license   https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 | Open Source Initiative
**/


namespace Solutionexcel\AddThis\Block;

class Index extends \Magento\Framework\View\Element\Template
{
	private $_objectManager;
	protected $_helper;
	protected $_registry;
	
	/**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Solutionexcel\AddThis\Helper\Data $customerSession
     * @param array $data
     */
    public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Framework\ObjectManagerInterface $objectmanager,
		\Magento\Framework\Registry $registry,
		\Solutionexcel\AddThis\Helper\Data $helper,
        array $data = []
    ) {
		$this->_objectManager = $objectmanager;
		$this->_registry = $registry;
		$this->_helper = $helper;
		parent::__construct($context, $data);	
    }
	
	public function isEnable()
    {
		return $this->_helper->isEnable();
    }
	
    /**
     * @return string
     */
    public function getPubId()
    {
		if($this->isEnable()){
			return $this->_helper->getPUBId();
		}
    }
	
	public function getCurrentCategory()
    {        
        return $this->_registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {        
        return $this->_registry->registry('current_product');
    }   
}
