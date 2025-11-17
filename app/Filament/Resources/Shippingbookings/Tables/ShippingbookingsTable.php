<?php

namespace App\Filament\Resources\Shippingbookings\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class ShippingbookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
              ->modifyQueryUsing(fn (Builder $query) => $query->where('assign_to', 0))
            ->columns([
               TextColumn::make( 'booking_no' )
                ->label( 'Booking Number' )
                ->searchable(),
                TextColumn::make( 'shippingcontainer.container_no' )
                ->label( 'Container Number' )
                ->listWithLineBreaks()
                ->searchable(),
                TextColumn::make( 'shippingcontainer.seal_no' )
                ->label( 'Seal Number' )
                ->listWithLineBreaks()
                ->searchable(),
                TextColumn::make( 'carrier.name' )
                ->label( 'Carrier' )
                ->numeric(),
                TextColumn::make('shippingcontainer.batch.batchno')
                ->label('Batch No')
                ->listWithLineBreaks()
                ->searchable(),
                TextColumn::make('bill_of_lading'),
                TextColumn::make('eta')
                ->label('ETA'),
                TextColumn::make('branch.business_name')
                ->label('Broker'),
               
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
              //  EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //DeleteBulkAction::make(),
                ]),
            ]);
    }
}
