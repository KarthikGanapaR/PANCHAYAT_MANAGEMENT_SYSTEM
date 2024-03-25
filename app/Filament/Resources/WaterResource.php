<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WaterResource\Pages;
use App\Filament\Resources\WaterResource\RelationManagers;
use App\Models\Water;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WaterResource extends Resource
{
    protected static ?string $model = Water::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Applicant Name')->required(),
                TextInput::make('email')->label('applicant mail')->required(),
                TextInput::make('phone')->label('applicant Phone')->required(),
                TextInput::make('aadharNumber')->label('applicant aadhar')->required(),
                FileUpload::make('userImage')->label('Applicant Photo')->required(),
                FileUpload::make('aadharImage')->label('Adhar img')->required(),
                TextInput::make('address')->label('Applicant address')->required(),

                Select::make('status')->label('status')->options([
                    'pending' => 'pending',
                    'approved' => 'approved'
                ]),

                Select::make('payment')->label('payment status')->options([
                    'pending' => 'pending',
                    'approved' => 'approved'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('status')->label('Status'),
                ImageColumn::make('userImage')->width(100),
                TextColumn::make('payment')->label('Payment Status'),
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
            'index' => Pages\ListWaters::route('/'),
            'create' => Pages\CreateWater::route('/create'),
            'edit' => Pages\EditWater::route('/{record}/edit'),
        ];
    }
}
