<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Iso37001Resource\Pages;
use App\Filament\Resources\Iso37001Resource\RelationManagers;
use App\Models\Iso37001;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

class Iso37001Resource extends Resource
{
    protected static ?string $model = Iso37001::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'ISO';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('certification_type')
                ->default('ISO 37001')
                ->disabled()
                ->dehydrated(), // still saves to DB
            TextInput::make('branch')->required(),
            TextInput::make('no_certification')->label('No Certification')->required(),
            DatePicker::make('start_date')->label('Start Date')->required(),
            DatePicker::make('expired_date')->label('Expired Date')->required(),
            FileUpload::make('pdf_path')
                ->label('Upload Certification PDF')
                ->acceptedFileTypes(['application/pdf'])
                ->directory('iso9001-certificates')
                ->preserveFilenames(),
            DatePicker::make('surveillance_1_plan')->label('Surveillance 1 Plan'),
            DatePicker::make('surveillance_2_plan')->label('Surveillance 2 Plan'),
            DatePicker::make('renewal_plan')->label('Renewal Plan'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('branch')->searchable(),
                TextColumn::make('no_certification')->label('No Certification')->searchable(),
                TextColumn::make('start_date')->date(),
                TextColumn::make('expired_date')->date(),
                TextColumn::make('surveillance_1_plan')->date(),
                TextColumn::make('surveillance_2_plan')->date(),
                TextColumn::make('renewal_plan')->date(),
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
            'index' => Pages\ListIso37001s::route('/'),
            'create' => Pages\CreateIso37001::route('/create'),
            'edit' => Pages\EditIso37001::route('/{record}/edit'),
        ];
    }
}
