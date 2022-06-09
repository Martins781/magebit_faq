<?php

namespace Magebit\Faq\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magebit\Faq\Model\ResourceModel\Question\CollectionFactory;

class ShowData extends Template
{
    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create()->addFieldToFilter('status', 1);
    }

    public function sortCollection($collection, $sortBy, $sortOrder)
    {
        $collection->setOrder($sortBy, $sortOrder);
        return $collection;
    }

}
