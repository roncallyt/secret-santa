<?php

namespace App\Enums;

enum StatusEnum: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    public function label(): string {
        return static::getLabel($this);
    }

    public static function getLabel(self $value): string {
        return match ($value) {
            StatusEnum::ACTIVE => 'Ativo',
            StatusEnum::INACTIVE => 'Inativo',
        };
    }
}
