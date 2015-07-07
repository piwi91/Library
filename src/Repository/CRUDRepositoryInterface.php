<?php

namespace Piwi\Repository;

interface CRUDRepositoryInterface
{
    /**
     * Add an entity to the entity repository
     *
     * @param object $entity
     *
     * @return void
     */
    public function add($entity);

    /**
     * Update an entity in the entity repository
     *
     * @param object $entity
     *
     * @return void
     */
    public function update($entity);

    /**
     * Remove entity from the entity repository
     *
     * @param object $entity
     *
     * @return void
     */
    public function remove($entity);
}