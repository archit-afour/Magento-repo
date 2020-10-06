<?php

namespace Learning\Test\Api\Data;
 
interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'test_id';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';
    const ADDRESS = 'address';
    const CREATED_AT = 'created_at';
 
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();
 
    /**
     * Set EntityId.
     */
    public function setEntityId($testId);
 
    /**
     * Get First name.
     *
     * @return varchar
     */
    public function getFirstname();
 
    /**
     * Set First name.
     */
    public function setFirstname($firstname);
 
    /**
     * Get Last name.
     *
     * @return varchar
     */
    public function getLastname();
 
    /**
     * Set Last name.
     */
    public function setLastname($lastname);
 
    /**
     * Get Address.
     *
     * @return varchar
     */
    public function getAddress();
 
    /**
     * Set Address.
     */
    public function setAddress($address);
 
    
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();
 
    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}