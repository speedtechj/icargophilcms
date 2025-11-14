<?php

namespace App\Filament\Resources\Shippingbookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ShippingbookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shippingagent_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('booking_no')
                    ->searchable(),
                TextColumn::make('carrier_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('vessel')
                    ->searchable(),
                TextColumn::make('return_terminal')
                    ->searchable(),
                TextColumn::make('origin_terminal')
                    ->searchable(),
                TextColumn::make('port_of_loading')
                    ->searchable(),
                TextColumn::make('port_of_unloading')
                    ->searchable(),
                TextColumn::make('etd')
                    ->date()
                    ->sortable(),
                TextColumn::make('eta')
                    ->date()
                    ->sortable(),
                TextColumn::make('bill_of_lading')
                    ->searchable(),
                TextColumn::make('branch_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('commodity')
                    ->searchable(),
                TextColumn::make('hs_code')
                    ->searchable(),
                TextColumn::make('place_of_receipt')
                    ->searchable(),
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_complete')
                    ->boolean(),
                IconColumn::make('assign_to')
                    ->boolean(),
                TextColumn::make('telex_attachments')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
