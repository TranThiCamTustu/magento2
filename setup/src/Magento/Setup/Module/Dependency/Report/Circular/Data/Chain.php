<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Dependency\Report\Circular\Data;

/**
 * Chain
 */
class Chain
{
    /**
     * Chain construct
     *
     * @param array $modules
     */
    public function __construct($modules)
    {
        $this->modules = $modules;
    }

    /**
     * Blog modules
     *
     * @return array
     */
    public function getModules()
    {
        return $this->modules;
    }
}
