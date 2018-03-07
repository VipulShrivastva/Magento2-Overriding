<?php
/**
 * Tutorial Catalog Product Rewrite Model
 *
 * @category    Vipul
 * @package     Vipul_Tutorial
 * @author      Vipul Software Private Limited
 *
 */
namespace Vipul\Tutorial\Model\Rewrite\Catalog;

class Product extends \Magento\Catalog\Model\Product
{
    public function isSalable()
    {
        // Do your stuff here
        return parent::isSalable();
    }

}
