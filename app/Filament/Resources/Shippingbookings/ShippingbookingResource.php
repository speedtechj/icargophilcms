<?php

namespace App\Filament\Resources\Shippingbookings;

use App\Filament\Resources\Shippingbookings\Pages\CreateShippingbooking;
use App\Filament\Resources\Shippingbookings\Pages\EditShippingbooking;
use App\Filament\Resources\Shippingbookings\Pages\ListShippingbookings;
use App\Filament\Resources\Shippingbookings\Schemas\ShippingbookingForm;
use App\Filament\Resources\Shippingbookings\Tables\ShippingbookingsTable;
use App\Models\Shippingbooking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ShippingbookingResource extends Resource
{
    protected static ?string $model = Shippingbooking::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $recordTitleAttribute = 'booking_no';

    public static function form(Schema $schema): Schema
    {
        return ShippingbookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShippingbookingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListShippingbookings::route('/'),
            'create' => CreateShippingbooking::route('/create'),
            'edit' => EditShippingbooking::route('/{record}/edit'),
        ];
    }
}
