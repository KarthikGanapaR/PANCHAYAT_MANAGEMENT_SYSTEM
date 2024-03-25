<?php

namespace App\Filament\Resources\ElectricityResource\Pages;

use App\Filament\Resources\ElectricityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElectricity extends EditRecord
{
    protected static string $resource = ElectricityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
