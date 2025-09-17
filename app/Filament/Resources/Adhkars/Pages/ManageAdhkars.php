<?php

namespace App\Filament\Resources\Adhkars\Pages;

use App\Filament\Resources\Adhkars\AdhkarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageAdhkars extends ManageRecords
{
    protected static string $resource = AdhkarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
