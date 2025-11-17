<?php

namespace App\Filament\Resources\Manifests\Tables;

use App\Models\Batch;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ExportBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Exports\ManifestExporter;
use Filament\Actions\Exports\Models\Export;


class ManifestsTable
{
   


    public static function configure(Table $table): Table
    {
        return $table
           
        //     ->headerActions([
        //     ExportAction::make()
        //         ->exporter(ManifestExporter::class),
        // ])
            ->columns([
                TextColumn::make('invoice')
                    ->label('Invoice')
                    ->searchable(['manual_invoice', 'booking_invoice'])
                    ->sortable()
                    ->getStateUsing(function (Model $record) {
                        if ($record->manual_invoice != null) {
                            return $record->manual_invoice;
                        } else {
                            return $record->booking_invoice;
                        }
                    }),
                TextColumn::make('Quantity')
                    ->default(1),
                TextColumn::make('boxtype.description')
                    ->label('Box Type'),
                TextColumn::make('batch.id')
                    ->label('Batch No')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function (Model $record) {
                        return $record->batch->batchno . "-" . $record->batch->batch_year ?? 'n/a';
                    }),
                TextColumn::make('sender.full_name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('receiver.full_name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('receiveraddress.address')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('receiveraddress.barangayphil.name')
                    ->label('Barangay')
                    ->searchable()->sortable(),
                TextColumn::make('receiveraddress.provincephil.name')
                    ->label('Province')
                    ->searchable()->sortable(),
                TextColumn::make('receiveraddress.cityphil.name')
                    ->label('City')
                    ->searchable()->sortable(),
                TextColumn::make('receiver.mobile_no')
                    ->label('Mobile No')
                    ->searchable()->sortable(),
                TextColumn::make('receiver.home_no')
                    ->label('Home No')
                    ->searchable()->sortable(),
            ])
            ->filters([
                SelectFilter::make('batch_id')
                  //  ->preload()
                    ->searchable()
                    ->relationship('batch', 
                    titleAttribute: 'id',
                    modifyQueryUsing: fn (Builder $query) => $query->where('is_active', true),)
                    ->getOptionLabelFromRecordUsing(fn($record) => "{$record->batchno} - {$record->batch_year}")
                    ->searchable(),

            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    ExportBulkAction::make()
                ->exporter(ManifestExporter::class)
                 ->fileName(fn (Export $export): string => "Manifests"),
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}
