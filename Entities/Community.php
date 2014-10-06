<?php

namespace bundles\community\Entities;

/**
 * community Entity
 *
 * @author Nicolas Bonnici <nicolasbonnici@gmail.com>
 */
class Community extends \Library\Core\Entity {

    const ENTITY = 'Community';
    const TABLE_NAME = 'community';
    const PRIMARY_KEY = 'idcommunity';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 50;

    protected $bIsSearchable = true;

    protected $aLinkedEntities = array();
}

