<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievmentResource\Pages;
use App\Filament\Resources\AchievmentResource\RelationManagers;
use App\Models\Achievment;
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
use Illuminate\Support\Facades\Storage;

class AchievmentResource extends Resource
{
    protected static ?string $model = Achievment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->columnSpan(2)->image()->maxSize(2048)->required(),
                TextInput::make('name')->columnSpan(2)->required(),
                TextInput::make('class')->columnSpan(2)->required(),
                TextInput::make('competition_field')->columnSpan(2)->required(),
                TextInput::make('level')->columnSpan(2)->required(),
                TextInput::make('ranking')->columnSpan(2)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('class')->searchable(),
                TextColumn::make('competition_field')->searchable(),
                TextColumn::make('level')->sortable()->searchable(),
                TextColumn::make('ranking')->sortable()->searchable(),
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
            'index' => Pages\ListAchievments::route('/'),
            'create' => Pages\CreateAchievment::route('/create'),
            'edit' => Pages\EditAchievment::route('/{record}/edit'),
        ];
    }


}
