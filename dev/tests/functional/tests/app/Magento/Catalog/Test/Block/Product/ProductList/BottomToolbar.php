<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Test\Block\Product\ProductList;

use Magento\Mtf\Block\Block;
use Magento\Mtf\Client\Locator;

/**
 * Class BottomToolbar
 * Bottom toolbar the product list page
 */
class BottomToolbar extends Block
{
    /**
     * Selector next active element
     *
     * @var string
     */
    private $nextPageSelector = '.item.current + .item a';

    /**
     * Selector first element
     *
     * @var string
     */
    private $firstPageSelector = '.item>.page';

    /**
     * Selector option element
     *
     * @var string
     */
    private $optionSelector = './/option';

    /**
     * Go to the next page
     *
     * @return bool
     */
    public function nextPage()
    {
        $nextPageItem = $this->_rootElement->find($this->nextPageSelector);
        if ($nextPageItem->isVisible()) {
            $nextPageItem->click();
            return true;
        }
        return false;
    }

    /**
     * Go to the first page
     *
     * @return bool
     */
    public function firstPage()
    {
        $firstPageItem = $this->_rootElement->find($this->firstPageSelector);
        if ($firstPageItem->isVisible()) {
            $firstPageItem->click();
            return true;
        }
        return false;
    }

    /**
     * Set value for limiter element by index
     *
     * @param int $index
     * @return $this
     */
    public function setLimiterValueByIndex($index)
    {
        $options = $this->_rootElement->getElements($this->optionSelector, Locator::SELECTOR_XPATH);
        if (isset($options[$index])) {
            $options[$index]->click();
        }
        return $this;
    }

    /**
     * Blog value for limiter element by index
     *
     * @param int $index
     * @return int|null
     */
    public function getLimitedValueByIndex($index)
    {
        $options = $this->_rootElement->getElements($this->optionSelector, Locator::SELECTOR_XPATH);
        if (isset($options[$index])) {
            return $options[$index]->getValue();
        }
        return null;
    }
}