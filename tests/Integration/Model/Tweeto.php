<?php

namespace GraphAware\Neo4j\OGM\Tests\Integration\Model;

use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * Class Tweeto
 * @package GraphAware\Neo4j\OGM\Tests\Integration\Model
 *
 * @OGM\Node(label="Tweeto")
 */
class Tweeto
{
    /**
     * @OGM\GraphId()
     */
    protected $id;

    /**
     * @OGM\Property(type="string")
     */
    protected $name;

    /**
     * @OGM\Relationship(targetEntity="Tweeto", type="FOLLOWS", direction="OUTGOING")
     * @var Tweeto
     */
    protected $follows;

    /**
     * @OGM\Relationship(targetEntity="Tweeto", type="FOLLOWS", direction="INCOMING")
     * @var Tweeto
     */
    protected $followed;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param mixed $follower
     */
    public function setFollows($follower)
    {
        $this->follows = $follower;
    }

    /**
     * @return mixed
     */
    public function getFollowed()
    {
        return $this->followed;
    }

    /**
     * @param mixed $follwed
     */
    public function setFollowed($follwed)
    {
        $this->followed = $follwed;
    }

}