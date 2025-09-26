<?php

declare(strict_types=1);

namespace Bolt\ConfigurationNoticesWidget;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Bolt Configuration Notices Widget';
    }

    public function initialize(): void
    {
        $this->addWidget(new ConfigurationWidget());
    }
}
