<?php

namespace App\Filament\Resources\DefecationLogResource\Pages;

use App\Filament\Resources\DefecationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDefecationLog extends EditRecord
{
    protected static string $resource = DefecationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
