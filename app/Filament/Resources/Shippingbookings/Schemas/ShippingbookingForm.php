<?php

namespace App\Filament\Resources\Shippingbookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ShippingbookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('shippingagent_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required(),
                TextInput::make('booking_no')
                    ->required(),
                TextInput::make('carrier_id')
                    ->required()
                    ->numeric(),
                TextInput::make('vessel')
                    ->required(),
                TextInput::make('return_terminal')
                    ->required(),
                TextInput::make('origin_terminal')
                    ->required(),
                TextInput::make('port_of_loading')
                    ->required(),
                TextInput::make('port_of_unloading')
                    ->required(),
                DatePicker::make('etd')
                    ->required(),
                DatePicker::make('eta')
                    ->required(),
                TextInput::make('bill_of_lading'),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('branch_id')
                    ->required()
                    ->numeric(),
                TextInput::make('commodity')
                    ->required(),
                TextInput::make('hs_code')
                    ->required(),
                TextInput::make('place_of_receipt')
                    ->required(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Toggle::make('is_complete')
                    ->required(),
                Toggle::make('assign_to')
                    ->required(),
                Textarea::make('bl_attachments')
                    ->columnSpanFull(),
                TextInput::make('telex_attachments')
                    ->tel(),
            ]);
    }
}
