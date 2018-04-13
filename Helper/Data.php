<?php
/**
 * Magento2 AddThis extension for share and follow buttons.
 * @package   Solutionexcel_AddThis
 * @author    SolutionExcel - https://www.solutionexcel.com/ - info@solutionexcel.com
 * @copyright Copyright © 2018 SolutionExcel. All rights reserved.
 * @license   https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 | Open Source Initiative
**/
 
namespace Solutionexcel\AddThis\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Catalog data helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * ScopeConfigInterface scopeConfig
     *
     * @var scopeConfig
     */
    protected $scopeConfig;
	
    /**
     * @param CustomerSession $customerSession
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
	
    public function isEnable(){
		return  $this->scopeConfig->getValue('solutionexcel_addthis/general/enable', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }  
	
	public function getPUBId(){
		return  $this->scopeConfig->getValue('solutionexcel_addthis/general/pubid', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }
	
	public function isAllowShareButtons(){
		return  $this->scopeConfig->getValue('solutionexcel_addthis/general/share_buttons', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }
	
	public function isAllowFollowButtons(){
		return  $this->scopeConfig->getValue('solutionexcel_addthis/general/follow_buttons', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }
}
