<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Report Reviews collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace AHT\Salesagents\Model\ResourceModel\Product\Sold\Collection;

class Initial extends \Magento\Reports\Model\ResourceModel\Report\Collection
{
    /**
     * Report sub-collection class name
     *
     * @var string
     */
    protected $_reportCollection = 'AHT\Salesagents\Model\ResourceModel\Product\Sold\Collection';
}