<?php

namespace Magebit\Faq\Api\Data;

interface QuestionInterface
{
    const QUESTION_ID = 'id';
    const QUESTION = 'question';
    const ANSWER = 'answer';
    const STATUS = 'status';
    const POSITION = 'position';
    const UPDATE_TIME = 'updated_at';

    public function getId() : ?string;

    public function getQuestion() : string;

    public function getAnswer() : string;

    public function getStatus() : array;

    public function getPosition() : string;

    public function getUpdateTime() : string;

    public function setQuestion($question) : QuestionInterface;

    public function setAnswer($answer) : QuestionInterface;

    public function setStatus($status) : QuestionInterface;

    public function setPosition($position) : QuestionInterface;
}
