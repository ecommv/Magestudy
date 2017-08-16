<?php

namespace Magestudy\Crud\Controller\Adminhtml\Tag;

use Magestudy\Crud\Api\TagRepositoryInterface;
use Magestudy\Crud\Controller\Adminhtml\AbstractSave;
use Magestudy\Crud\Helper\AclResources;
use Magestudy\Crud\Model\Tag;
use Magestudy\Crud\Model\TagFactory;

class Save extends AbstractSave
{
    /**
     * @return string
     */
    protected function _getAclResource()
    {
        return AclResources::TAG_SAVE;
    }

    /**
     * @return string
     */
    protected function _getEntityTitle()
    {
        return Tag::ENTITY_TITLE;
    }

    /**
     * @return string
     */
    protected function _getRepositoryInterface()
    {
        return TagRepositoryInterface::class;
    }

    /**
     * @return string
     */
    protected function _getIdField()
    {
        return Tag::ID;
    }

    /**
     * @return string
     */
    protected function _getFactory()
    {
        return TagFactory::class;
    }
}