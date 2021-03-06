<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\VideoHighlight;

use CodelyTv\Mooc\VideoHighlight\Domain\VideoHighlightRepository;
use CodelyTv\Test\Mooc\Shared\Infrastructure\MoocContextUnitTestCase;
use Mockery\MockInterface;

abstract class VideoHighlightModuleUnitTestCase extends MoocContextUnitTestCase
{
    private $repository;

    /** @return VideoHighlightRepository|MockInterface */
    protected function repository()
    {
        return $this->repository = $this->repository ?: $this->mock(VideoHighlightRepository::class);
    }
}
