<?php

namespace App\Filament\Resources\Admin\OrderStatusResource\Pages;

use App\Filament\Resources\Admin\OrderStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderStatus extends EditRecord
{
    protected static string $resource = OrderStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
