<?php

declare(strict_types = 1);

namespace BrighteCapital\Api\Models;

class User
{

    /** @var int */
    public $id;

    /** @var string */
    public $role;

    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $email;

    /** @var string */
    public $phone;

    /** @var string Salesforce Contact ID */
    public $sfContactId;

}
