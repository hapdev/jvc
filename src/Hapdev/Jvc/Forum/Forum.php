<?php

namespace Hapdev\Jvc\Forum;

/**
 * @author Hapdev
 */
class Forum
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @param integer The forum identifier.
     */
    public function __construct($id)
    {
        $this->setId($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
