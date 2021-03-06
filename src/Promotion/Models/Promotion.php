<?php

namespace BrighteCapital\Api\Promotion\Models;

class Promotion
{
    /** @var string */
    public $id;

    /** @var string */
    public $code;

    /** @var string */
    public $promotionTypeId;

    /** @var string */
    public $description;

    /** @var array */
    public $content;

    /** @var string */
    public $displayTitle;

    /** @var string */
    public $displayText;

    /** @var string */
    public $displayUrl;

    /** @var string */
    public $start;

    /** @var string */
    public $end;

    /** @var string */
    public $created;

    /** @var string */
    public $modified;

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'promotionTypeId' => $this->promotionTypeId,
            'description' => $this->description,
            'content' => $this->content,
            'displayTitle' => $this->displayTitle,
            'displayText' => $this->displayText,
            'displayUrl' => $this->displayUrl,
            'start' => $this->start,
            'end' => $this->end,
            'created' => $this->created,
            'modified' => $this->modified,
        ];
    }
}
