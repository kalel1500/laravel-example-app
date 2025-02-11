<?php

declare(strict_types=1);

namespace Src\Admin\Domain\Objects\DataObjects;

use Src\Shared\Domain\Objects\Entities\Collections\TagTypeCollection;
use Src\Shared\Domain\Objects\Entities\TagTypeEntity;
use Thehouseofel\Hexagonal\Domain\Objects\DataObjects\ContractDataObject;

final class ViewTagsDto extends ContractDataObject
{
    public function __construct(
        public readonly ?TagTypeEntity $currentTagType,
        public readonly TagTypeCollection $tagTypes,
    )
    {
    }
}
