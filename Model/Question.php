<?php

namespace Magebit\Faq\Model;

use Magebit\Faq\Api\Data\QuestionInterface;
use Magento\Framework\Model\AbstractModel;

class Question extends AbstractModel implements QuestionInterface
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    protected function _construct()
    {
        $this->_init(\Magebit\Faq\Model\ResourceModel\Question::class);
    }

    public function getId() : ?string
    {
        return $this->getData(self::QUESTION_ID);
    }

    public function getQuestion() : string
    {
        return $this->getData(self::QUESTION);
    }

    public function getAnswer() : string
    {
        return $this->getData(self::ANSWER);
    }

    public function getStatus() : array
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }

    public function getPosition() : string
    {
        return $this->getData(self::POSITION);
    }

    public function getUpdateTime() : string
    {
        return $this->getData(self::UPDATE_TIME);
    }

    public function setQuestion($question) : QuestionInterface
    {
        return $this->setData(self::QUESTION, $question);
    }

    public function setAnswer($answer) : QuestionInterface
    {
        return $this->setData(self::ANSWER, $answer);
    }

    public function setStatus($status) : QuestionInterface
    {
        return $this->setData(self::STATUS, $status);
    }

    public function setPosition($position) : QuestionInterface
    {
        return $this->setData(self::POSITION, $position);
    }
}


