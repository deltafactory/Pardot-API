<?php

namespace CyberDuck\PardotApi\Query;

use CyberDuck\PardotApi\Contract\QueryObject;
use CyberDuck\PardotApi\Traits\CanQuery;
use CyberDuck\PardotApi\Validator\DateValidator;
use CyberDuck\PardotApi\Validator\PositiveIntValidator;

/**
 * Visitor Activities object representation
 * 
 * @category   PardotApi
 * @package    PardotApi
 * @author     Andrew Mc Cormack <andy@cyber-duck.co.uk>
 * @copyright  Copyright (c) 2018, Andrew Mc Cormack
 * @license    https://github.com/cyber-duck/pardot-api/license
 * @version    1.0.0
 * @link       https://github.com/cyber-duck/pardot-api
 * @since      1.0.0
 */
class VisitorActivitiesQuery extends Query
{
	use CanQuery;

    /**
     * Object name
     *
     * @var string
     */
    protected $object = 'visitorActivity';

    /**
     * Returns an array of allowed query criteria and validators for the values
     *
     * @return array
     */
    public function getQueryCriteria(): array
    {
        return [
            'created_after'           => new DateValidator,
            'created_before'          => new DateValidator,
            'id_greater_than'         => new PositiveIntValidator,
            'id_less_than'			  => new PositiveIntValidator,
            'updated_after'			  => new PositiveIntValidator,
            'updated_before'		  => new PositiveIntValidator,
            'type'					  => new PositiveIntValidator,
        ];
    } 

    /**
     * Returns an array of allowed query navigation params and validators for the values
     *
     * @return array
     */
    public function getQueryNavigation(): array
    {
        return [
            'limit'           => new PositiveIntValidator,
            'offset'          => new PositiveIntValidator,
            'id_greater_than' => new PositiveIntValidator
        ];
    }
}