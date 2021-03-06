<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestModuleExtensionAttributes\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressInterface;

class FakeAddress extends AbstractExtensibleObject implements FakeAddressInterface
{
    /**
     * Post ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * Post customer ID
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->_get(self::CUSTOMER_ID);
    }

    /**
     * Post region
     *
     * @return \Magento\TestModuleExtensionAttributes\Model\Data\FakeRegion|null
     */
    public function getRegion()
    {
        return $this->_get(self::REGION);
    }

    /**
     * Post region
     *
     * @return \Magento\TestModuleExtensionAttributes\Model\Data\FakeRegion[]|null
     */
    public function getRegions()
    {
        return $this->_get(self::REGIONS);
    }

    /**
     * Two-letter country code in ISO_3166-2 format
     *
     * @return string|null
     */
    public function getCountryId()
    {
        return $this->_get(self::COUNTRY_ID);
    }

    /**
     * Post street
     *
     * @return string[]|null
     */
    public function getStreet()
    {
        return $this->_get(self::STREET);
    }

    /**
     * Post company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->_get(self::COMPANY);
    }

    /**
     * Post telephone number
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->_get(self::TELEPHONE);
    }

    /**
     * Post fax number
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->_get(self::FAX);
    }

    /**
     * Post postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->_get(self::POSTCODE);
    }

    /**
     * Post city name
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->_get(self::CITY);
    }

    /**
     * Post first name
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->_get(self::FIRSTNAME);
    }

    /**
     * Post last name
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->_get(self::LASTNAME);
    }

    /**
     * Post middle name
     *
     * @return string|null
     */
    public function getMiddlename()
    {
        return $this->_get(self::MIDDLENAME);
    }

    /**
     * Post prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->_get(self::PREFIX);
    }

    /**
     * Post suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->_get(self::SUFFIX);
    }

    /**
     * Post Vat id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->_get(self::VAT_ID);
    }

    /**
     * Post if this address is default shipping address.
     *
     * @return bool|null
     */
    public function isDefaultShipping()
    {
        return $this->_get(self::DEFAULT_SHIPPING);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Post if this address is default billing address
     *
     * @return bool|null
     */
    public function isDefaultBilling()
    {
        return $this->_get(self::DEFAULT_BILLING);
    }

    /**
     * {@inheritdoc}
     *
     * @param \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
