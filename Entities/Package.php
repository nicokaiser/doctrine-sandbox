<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="packages")
 */
class Package
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @Column(type="string")
     */
    public $name;
}