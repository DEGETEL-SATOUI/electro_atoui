<?php

namespace Proxies\__CG__\ElectroAtoui\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserProfile extends \ElectroAtoui\CoreBundle\Entity\UserProfile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'id', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'gender', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'first_name', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'last_name', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'phone', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'address', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'address_complement', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'city', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'zip_code'];
        }

        return ['__isInitialized__', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'id', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'gender', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'first_name', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'last_name', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'phone', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'address', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'address_complement', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'city', '' . "\0" . 'ElectroAtoui\\CoreBundle\\Entity\\UserProfile' . "\0" . 'zip_code'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserProfile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setFirstName($first_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$first_name]);

        return parent::setFirstName($first_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($last_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$last_name]);

        return parent::setLastName($last_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode($zip_code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', [$zip_code]);

        return parent::setZipCode($zip_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', []);

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressComplement($address_complement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressComplement', [$address_complement]);

        return parent::setAddressComplement($address_complement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressComplement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressComplement', []);

        return parent::getAddressComplement();
    }

}
