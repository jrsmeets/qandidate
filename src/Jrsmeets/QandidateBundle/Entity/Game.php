<?php

namespace Jrsmeets\QandidateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 */
class Game
{
    const STATUS_BUSY = 0;
    const STATUS_FAILED = 1;
    const STATUS_SUCCESS = 2;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $word;

    /**
     * @var integer
     */
    private $triesLeft;

    /**
     * @var string
     */
    private $guessed;

    /**
     * @var integer
     */
    private $createTime;

    /**
     * @var string
     */
    private $createIp;

    /**
     * @var integer
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set word
     *
     * @param string $word
     * @return Game
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set triesLeft
     *
     * @param integer $triesLeft
     * @return Game
     */
    public function setTriesLeft($triesLeft)
    {
        $this->triesLeft = $triesLeft;

        return $this;
    }

    /**
     * Get triesLeft
     *
     * @return integer 
     */
    public function getTriesLeft()
    {
        return $this->triesLeft;
    }

    /**
     * Set guessed
     *
     * @param string $guessed
     * @return Game
     */
    public function setGuessed($guessed)
    {
        $this->guessed = $guessed;

        return $this;
    }

    /**
     * Get guessed
     *
     * @return string 
     */
    public function getGuessed()
    {
        return $this->guessed;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     * @return Game
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set createIp
     *
     * @param string $createIp
     * @return Game
     */
    public function setCreateIp($createIp)
    {
        $this->createIp = $createIp;

        return $this;
    }

    /**
     * Get createIp
     *
     * @return string 
     */
    public function getCreateIp()
    {
        return $this->createIp;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Game
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    
}
