<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ElectricityResource\Pages;
use App\Filament\Resources\ElectricityResource\RelationManagers;
use App\Models\Electricity;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ElectricityResource extends Resource
{
    protected static ?string $model = Electricity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Applicant Name')->required(),
                TextInput::make('email')->label('applicant mail')->required(),
                TextInput::make('phone')->label('applicant Phone')->required(),
                TextInput::make('aadharNumber')->label('applicant aadhar')->required(),
                TextInput::make('address')->label('Applicant address')->required(),
                Select::make('type')->label('Type')->options([
                    'house' => 'house',
                    'shop' => 'shop',
                    'factory' => 'factory'
                ]),
                Select::make('voltage')->label('Voltage Required')->options([
                    'low(475V)' => 'low(475V)',
                    'high(11000v)' => 'high(11000v)',
                    'extra_high(33000V)' => 'extra_high(33000V)'
                ]),
                Select::make('meter')->label('Meter Board')->options([
                    'single phase' => 'Single phase',
                    'three phase' => 'Three phase',
                    'three phase ct' => 'Three phase CT'
                ]),
                Select::make('status')->label('status')->options([
                    'pending' => 'pending',
                    'approved' => 'approved'
                ]),
                
                Select::make('payment')->label('payment status')->options([
                    'pending' => 'pending',
                    'approved' => 'approved'
                ]),
                FileUpload::make('aadharImage')->label('Adhar img')->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('type')->label('Type'),
                TextColumn::make('voltage')->label('Voltage'),
                TextColumn::make('meter')->label('Meter'),
                TextColumn::make('status')->label('Status'),
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
            'index' => Pages\ListElectricities::route('/'),
            'create' => Pages\CreateElectricity::route('/create'),
            'edit' => Pages\EditElectricity::route('/{record}/edit'),
        ];
    }
}
