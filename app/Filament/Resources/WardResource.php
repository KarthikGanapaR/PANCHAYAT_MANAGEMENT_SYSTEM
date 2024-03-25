<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WardResource\Pages;
use App\Filament\Resources\WardResource\RelationManagers;
use App\Models\Ward;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WardResource extends Resource
{
    protected static ?string $model = Ward::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ward_no')->label('Ward Number')->required(),
                TextInput::make('area_name')->label('Area Name')->required(),
                TextInput::make('families')->label('No. of Families')->required(),
                TextInput::make('voters')->label('No. of Voters')->required(),
                TextInput::make('councillor_name')->label('Councillor Name')->required(),
                TextInput::make('councillor_number')->label('Councillor Number')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('area_name')->label('Area Name'),
                TextColumn::make('ward_no')->label('Ward Number'),
                TextColumn::make('families')->label('No. of Families'),
                TextColumn::make('voters')->label('No. of Voters'),
                TextColumn::make('councillor_name')->label('Councillor Name'),
                TextColumn::make('councillor_number')->label('Councillor Number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListWards::route('/'),
            'create' => Pages\CreateWard::route('/create'),
            'edit' => Pages\EditWard::route('/{record}/edit'),
        ];
    }
}
