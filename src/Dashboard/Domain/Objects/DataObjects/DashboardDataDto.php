<?php

declare(strict_types=1);

namespace Src\Dashboard\Domain\Objects\DataObjects;

use Src\Shared\Domain\Objects\Entities\Collections\PostCollection;
use Src\Shared\Domain\Objects\Entities\Collections\TagCollection;
use Thehouseofel\Hexagonal\Domain\Objects\DataObjects\ContractDataObject;

final class DashboardDataDto extends ContractDataObject
{
    public function __construct(
        public readonly TagCollection $tags,
        public readonly PostCollection $posts,
    )
    {
    }
}
