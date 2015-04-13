<?php

namespace Piwi\CRUD;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface CRUDControllerInterface
{
    /**
     * Renders a list overview
     *
     * @return Response
     */
    public function listAction();

    /**
     * Renders a overview for a single entity
     *
     * @param $id
     *
     * @return Response
     */
    public function showAction($id);

    /**
     * Renders a create view to create a new entity through a form
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(Request $request);

    /**
     * Renders an update view to update an existing entity through a form
     *
     * @param Request $request
     * @param $id
     *
     * @return Response
     */
    public function updateAction(Request $request, $id);

    /**
     * Deletes an entity from the storage
     *
     * @param $id
     *
     * @return Response
     */
    public function deleteAction($id);
}