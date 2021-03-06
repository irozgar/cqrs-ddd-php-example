<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\Student\Domain;

use CodelyTv\Mooc\Student\Domain\StudentId;
use CodelyTv\Test\Shared\Domain\UuidMother;

final class StudentIdMother
{
    public static function create(string $id)
    {
        return new StudentId($id);
    }

    public static function random()
    {
        return self::create(UuidMother::random());
    }
}
