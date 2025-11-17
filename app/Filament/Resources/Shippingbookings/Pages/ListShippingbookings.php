<?php

namespace App\Filament\Resources\Shippingbookings\Pages;

use App\Filament\Resources\Shippingbookings\ShippingbookingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListShippingbookings extends ListRecords
{
    protected static string $resource = ShippingbookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
          //  CreateAction::make(),
        ];
    }
}
