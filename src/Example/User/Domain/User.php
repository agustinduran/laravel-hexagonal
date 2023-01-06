<?php

declare(strict_types=1);

namespace Src\Example\User\Domain;

use Src\Example\User\Domain\ValueObjects\{
    UserEmail,
    UserFullName,
    UserPassword,
    UserTimestamp,
    UserUserName
};

final class User
{
    public function __construct(
        private UserUserName $userName,
        private UserFullName $fullName,
        private UserEmail $email,
        private UserPassword $password,
        private UserTimestamp $timestamp
    ) {}

    /**
     * Get the value of userName
     */ 
    public function getUserName(): UserUserName
    {
        return $this->userName;
    }

    /**
     * Get the value of fullName
     */ 
    public function getFullName(): UserFullName
    {
        return $this->fullName;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): UserEmail
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): UserPassword
    {
        return $this->password;
    }

    /**
     * Get the value of timestamp
     */ 
    public function getTimestamp(): UserTimestamp
    {
        return $this->timestamp;
    }
}