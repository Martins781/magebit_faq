<?php

declare(strict_types=1);

namespace Magebit\Faq\Model\Question\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    protected $faqQuestion;

    public function __construct(\Magebit\Faq\Model\Question $faqQuestion)
    {
        $this->faqQuestion = $faqQuestion;
    }

    public function toOptionArray() : array
    {
        $options = [];
        $availableOptions = $this->faqQuestion->getStatus();

        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }

        return $options;
    }
}
