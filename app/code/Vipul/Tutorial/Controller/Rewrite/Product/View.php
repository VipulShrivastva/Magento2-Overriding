<?php
/**
 * Tutorial Rewrite Product View Controller
 *
 * @category    Vipul
 * @package     Vipul_Tutorial
 * @author      Vipul Software Private Limited
 *
 */
namespace Vipul\Tutorial\Controller\Rewrite\Product;

class View extends \Magento\Catalog\Controller\Product\View
{
    /**
     * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        // Do your stuff here
        return parent::execute();
    }
}
