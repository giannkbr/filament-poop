<?php

namespace App\Filament\Resources\DefecationLogResource\Pages;

use App\Filament\Resources\DefecationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDefecationLogs extends ListRecords
{
    protected static string $resource = DefecationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
