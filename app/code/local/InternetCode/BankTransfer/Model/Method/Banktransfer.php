<?php
class InternetCode_BankTransfer_Model_Method_Banktransfer extends Mage_Payment_Model_Method_Abstract{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'icbanktransfer';

    /**
     * Bank Transfer payment block paths
     *
     * @var string
     */
    protected $_formBlockType = 'ic_banktransfer/form_banktransfer';
    //protected $_infoBlockType = 'ic_banktransfer/info_banktransfer';

    public function getBanksAccounts()
    {
        $accounts = unserialize($this->getConfigData('accounts'));
        return array_values($accounts);
    }


    public function getBankAccountByBic($bic)
    {
        $accounts = $this->getBanksAccounts();
        foreach($accounts as $acc){
            if($acc['bic'] === $bic){
                return $acc;
            }
        }
        return null;
    }

    /**
     * Assign data to info model instance
     *
     * @param   mixed $data
     * @return  $this
     */
    public function assignData($data)
    {
        if (!($data instanceof Varien_Object)) {
            $data = new Varien_Object($data);
        }
        $info = $this->getInfoInstance();
        $selectedBank = $this->getBankAccountByBic($data->getData('bank_bic'));
        foreach($selectedBank as $k => $v){
            $info->setAdditionalInformation($k,$v);
        }
        return $this;
    }
}
