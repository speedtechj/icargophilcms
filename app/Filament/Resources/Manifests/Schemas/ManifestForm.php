<?php

namespace App\Filament\Resources\Manifests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ManifestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_invoice')
                    ->required(),
                TextInput::make('manual_invoice'),
                TextInput::make('sender_id')
                    ->required()
                    ->numeric(),
                TextInput::make('senderaddress_id')
                    ->required()
                    ->numeric(),
                TextInput::make('receiver_id')
                    ->required()
                    ->numeric(),
                TextInput::make('receiveraddress_id')
                    ->required()
                    ->numeric(),
                TextInput::make('boxtype_id')
                    ->required()
                    ->numeric(),
                TextInput::make('servicetype_id')
                    ->required()
                    ->numeric(),
                TextInput::make('agent_id')
                    ->numeric(),
                TextInput::make('zone_id')
                    ->required()
                    ->numeric(),
                TextInput::make('branch_id')
                    ->required()
                    ->numeric(),
                TextInput::make('batch_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('booking_date')
                    ->required(),
                TimePicker::make('start_time'),
                TimePicker::make('end_time'),
                TextInput::make('discount_id')
                    ->numeric(),
                Toggle::make('is_pickup')
                    ->required(),
                TextInput::make('total_price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('irregular_length')
                    ->numeric(),
                TextInput::make('irregular_width')
                    ->numeric(),
                TextInput::make('irregular_height')
                    ->numeric(),
                TextInput::make('total_inches')
                    ->numeric(),
                Toggle::make('is_paid')
                    ->required(),
                TextInput::make('payment_balance')
                    ->required()
                    ->numeric(),
                DatePicker::make('payment_date'),
                TextInput::make('refund_amount')
                    ->numeric(),
                TextInput::make('dimension'),
                Textarea::make('note')
                    ->columnSpanFull(),
                Toggle::make('is_deliver')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('catextracharge_id')
                    ->numeric(),
                TextInput::make('extracharge_amount')
                    ->numeric(),
                Toggle::make('box_replacement')
                    ->required(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Toggle::make('is_edit')
                    ->required(),
                Toggle::make('is_agent')
                    ->required(),
                TextInput::make('agentdiscount_id')
                    ->numeric(),
            ]);
    }
}
