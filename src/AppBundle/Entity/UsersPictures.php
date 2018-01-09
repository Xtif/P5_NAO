<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UsersPictures
 *
 * @ORM\Table(name="users_pictures")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersPicturesRepository")
 */
class UsersPictures
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_file", type="string", length=255)
     *
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $pictureFile;

    /**
    * @ORM\OneToOne(targetEntity="AppBundle\Entity\Users", mappedBy="picture", cascade={"all"})
    */

    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return UsersPictures
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return UsersPictures
     */
    public function setUser(\AppBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pictureFile
     *
     * @param string $pictureFile
     *
     * @return UsersPictures
     */
    public function setPictureFile($pictureFile)
    {
        $this->pictureFile = $pictureFile;

        return $this;
    }

    /**
     * Get pictureFile
     *
     * @return string
     */
    public function getPictureFile()
    {
        return $this->pictureFile;
    }
}
