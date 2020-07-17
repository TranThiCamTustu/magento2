<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Dependency\Report\Circular\Data;

/**
 * Module
 */
class Module
{
    /**
     * Module name
     *
     * @var string
     */
    protected $name;

    /**
     * Circular dependencies chains
     *
     * @var \Magento\Setup\Module\Dependency\Report\Circular\Data\Chain[]
     */
    protected $chains;

    /**
     * Module construct
     *
     * @param array $name
     * @param \Magento\Setup\Module\Dependency\Report\Circular\Data\Chain[] $chains
     */
    public function __construct($name, array $chains = [])
    {
        $this->name = $name;
        $this->chains = $chains;
    }

    /**
     * Blog name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Blog circular dependencies chains
     *
     * @return \Magento\Setup\Module\Dependency\Report\Circular\Data\Chain[]
     */
    public function getChains()
    {
        return $this->chains;
    }

    /**
     * Blog circular dependencies chains count
     *
     * @return int
     */
    public function getChainsCount()
    {
        return count($this->chains);
    }
}