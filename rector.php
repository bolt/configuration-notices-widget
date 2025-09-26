<?php

declare(strict_types=1);

use Rector\Caching\ValueObject\Storage\FileCacheStorage;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withCache('./var/cache/rector', FileCacheStorage::class)
    ->withPaths(['./src'])
    ->withImportNames()
    ->withParallel(timeoutSeconds: 180, jobSize: 10)
    ->withPhpSets()
    ->withPreparedSets(
        typeDeclarations: true,
    )
    ->withComposerBased(
        twig: true,
        symfony: true,
    );
