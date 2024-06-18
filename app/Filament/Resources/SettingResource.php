<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('link_wa')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_ig')
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sales_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sales_email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_office')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_maps')
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextArea::make('meta_description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('domain')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photo')
                    ->image(),
                Forms\Components\FileUpload::make('hero'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('link_wa')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('link_ig')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('phone')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('sales_name')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('sales_email')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('address_office')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('link_maps')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('hero')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('title')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('meta_description')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('photo')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('domain')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'view' => Pages\ViewSetting::route('/{record}'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
