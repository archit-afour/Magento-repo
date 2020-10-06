<?php
namespace Learning\Test\Model;
use Magento\Framework\Model\AbstractModel;
use Learning\Test\Api\Data\GridInterface;
use Magento\Sales\Model\ResourceModel\GridInterface as ResourceModelGridInterface;

class Test extends AbstractModel implements GridInterface
{


    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'learning_test';
 
    /**
     * @var string
     */
    protected $_cacheTag = 'learning_test';
 
    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'learning_test';

    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Learning\Test\Model\ResourceModel\Test');
    }

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }
 
    /**
     * Set EntityId.
     */
    public function setEntityId($testId)
    {
        return $this->setData(self::ENTITY_ID, $testId);
    }
    
    /**
     * Get First name.
     *
     * @return varchar
     */
    public function getFirstname()
    {
        return $this->getData(self::FIRSTNAME);
    }
 
    /**
     * Set First name.
     */
    public function setFirstname($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }
 
    /**
     * Get get Last name.
     *
     * @return varchar
     */
    public function getLastname()
    {
        return $this->getData(self::LASTNAME);
    }
 
    /**
     * Set last name.
     */
    public function setLastname($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }
 
    /**
     * Get Address.
     *
     * @return varchar
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }
 
    /**
     * Set Address.
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
 
    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}