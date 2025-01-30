<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Actions\Approve;
use App\Filament\Resources\TransactionResource\Pages;
use Bavix\Wallet\Models\Transaction;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('meta.attachment'),
                Tables\Columns\TextColumn::make('wallet.holder.name')
                    ->description(fn ($record) => $record->wallet->holder->email),
                Tables\Columns\TextColumn::make('amount')->money(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Approve::make('approve')->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(\Filament\Infolists\Infolist $infolist): \Filament\Infolists\Infolist
    {
        return $infolist->schema([
            ImageEntry::make('meta.attachment')->columnSpanFull(),
            TextEntry::make('wallet.holder.name')->label('Owner'),
            TextEntry::make('amount')->money(),
            TextEntry::make('confirmed')
                ->label('status')
                ->formatStateUsing(fn($state) => $state ? 'verified' : 'unverified')
        ]);
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
            'view' => Pages\ViewTransaction::route('/{record}'),
        ];
    }
}
