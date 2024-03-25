<?php

namespace App\Filament\Resources\WaterResource\Pages;

use App\Filament\Resources\WaterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWater extends EditRecord
{
    protected static string $resource = WaterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
