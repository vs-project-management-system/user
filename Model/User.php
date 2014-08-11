<?php
namespace PMS\Component\User\Model;

class User
{
    /**
     * First name
     * @var string 
     */
    protected $firstName;
    
    /**
     * Last name
     * @var string 
     */
    protected $lastName;
    
    /**
     * Gender
     * @var string 
     */
    protected $gender;
    
    /**
     * Birthdate
     * @var \Datetime 
     */
    protected $birthdate;
    
    /**
     * Get first name
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Set first name
     * @param string $firstName
     * @return \PMS\Component\User\Model\User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    /**
     * Get last name
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * Set last name
     * @param string $lastName
     * @return \PMS\Component\User\Model\User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    /**
     * Get gender
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * Set gender
     * @param string $gender
     * @return \PMS\Component\User\Model\User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        
        return $this;
    }
    
    /**
     * Get birthdate
     * @return \Datetime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    
    /**
     * Set birthdate
     * @param \Datetime $birthdate
     * @return \PMS\Component\User\Model\User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        
        return $this;
    }
}
