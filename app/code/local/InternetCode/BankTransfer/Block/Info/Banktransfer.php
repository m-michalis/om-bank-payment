<?php
/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_Payment
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @copyright  Copyright (c) 2019-2023 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Block for Bank Transfer payment generic info
 *
 * @category   Mage
 * @package    Mage_Payment
 */
class InternetCode_BankTransfer_Block_Info_Banktransfer extends Mage_Payment_Block_Info
{
    /**
     * Instructions text
     *
     * @var string|null
     */
    protected $_selectedBank;

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('ic_banktransfer/info/banktransfer.phtml');
    }

    /**
     * Get instructions text from order payment
     * (or from config, if instructions are missed in payment)
     *
     * @return string
     */
    public function getSelectedBank()
    {
        if (is_null($this->_selectedBank)) {
            $this->_selectedBank = $this->getInfo()->getAdditionalInformation();
        }
        return $this->_selectedBank;
    }
}
