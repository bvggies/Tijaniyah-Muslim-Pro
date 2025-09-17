<?php

namespace App\Filament\Resources\Replies\Pages;

use App\Filament\Resources\Replies\ReplyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageReplies extends ManageRecords
{
    protected static string $resource = ReplyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
