<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyResource\Pages;
use App\Filament\Resources\SurveyResource\RelationManagers;
use App\Models\Survey;
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

class SurveyResource extends Resource
{
    protected static ?string $model = Survey::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Applicant Name')->required(),
                TextInput::make('email')->label('Applicant mail')->required(),
                TextInput::make('phone')->label('Applicant Phone')->required(),
                TextInput::make('aadharNumber')->label('applicant aadhar')->required(),
                TextInput::make('address')->label('Plot address')->required(),
                TextInput::make('date')->label('Survey Date')->placeholder('DD-MM-YYYY')->nullable(),
                Select::make('officer')->label('Officier Verification')->options([
                    'verified' => 'Verified',
                    'not verified' => 'Not verified',
                ]),
                Select::make('affidavit')->label('Affidavit')->options([
                    'pending' => 'pending',
                    'provided' => 'provided',
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
                TextColumn::make('date')->label('survey date'),
                TextColumn::make('officer')->label('officer verification'),
                TextColumn::make('affidavit')->label('affidavit'),
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
            'index' => Pages\ListSurveys::route('/'),
            'create' => Pages\CreateSurvey::route('/create'),
            'edit' => Pages\EditSurvey::route('/{record}/edit'),
        ];
    }
}
