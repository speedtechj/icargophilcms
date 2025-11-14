<?php

namespace App\Filament\Resources\Shippingbookings\Pages;

use App\Filament\Resources\Shippingbookings\ShippingbookingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditShippingbooking extends EditRecord
{
    protected static string $resource = ShippingbookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
