<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="persons")
 */
class Person
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @Column(type="string", nullable="TRUE")
     */
    public $name;

    /**
     * @ManyToMany(targetEntity="Package", cascade="detach")
     * @JoinTable(name="persons_packages",
     *      joinColumns={@JoinColumn(name="person_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="package_id", referencedColumnName="id")}
     *      )
     */
    public $packages;

    public function __construct()
    {
        $this->packages = new \Doctrine\Common\Collections\ArrayCollection;
    }
}