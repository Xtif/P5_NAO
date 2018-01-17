<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Observations extends \AppBundle\Entity\Observations implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'author', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'birdName', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'birdRace', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'latitude', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'published', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'publishedAt', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'reported', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'pictures', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'author', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'birdName', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'birdRace', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'latitude', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'published', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'publishedAt', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'reported', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'pictures', '' . "\0" . 'AppBundle\\Entity\\Observations' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Observations $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirdName($birdName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirdName', [$birdName]);

        return parent::setBirdName($birdName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirdName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirdName', []);

        return parent::getBirdName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirdRace($birdRace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirdRace', [$birdRace]);

        return parent::setBirdRace($birdRace);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirdRace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirdRace', []);

        return parent::getBirdRace();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', [$published]);

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublished', []);

        return parent::getPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishedAt($publishedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishedAt', [$publishedAt]);

        return parent::setPublishedAt($publishedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishedAt', []);

        return parent::getPublishedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setReported($reported)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReported', [$reported]);

        return parent::setReported($reported);
    }

    /**
     * {@inheritDoc}
     */
    public function getReported()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReported', []);

        return parent::getReported();
    }

    /**
     * {@inheritDoc}
     */
    public function addPicture(\AppBundle\Entity\Pictures $picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPicture', [$picture]);

        return parent::addPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function removePicture(\AppBundle\Entity\Pictures $picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePicture', [$picture]);

        return parent::removePicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictures', []);

        return parent::getPictures();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\Users $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}