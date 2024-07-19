<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserChallengeResource\Pages;
use App\Filament\Resources\UserChallengeResource\RelationManagers;
use App\Models\UserChallenge;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserChallengeResource extends Resource
{
    protected static ?string $model = UserChallenge::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('challenge_id')
                    ->relationship('challenge', 'title')
                    ->required(),
                Forms\Components\TextInput::make('progress')->required()->numeric(),
                Forms\Components\Select::make('completed')->options([
                    '0' => 'No',
                    '1' => 'Yes',
                ])->required(),
                Forms\Components\DateTimePicker::make('completed_at')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('User ID'),
                Tables\Columns\TextColumn::make('challenge.title')->label('Challenge ID'),
                Tables\Columns\TextColumn::make('progress')->label('Progress'),
                Tables\Columns\TextColumn::make('completed')->label('Completed'),
                Tables\Columns\DateTimeColumn::make('completed_at')->label('Completed At'),
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
            'index' => Pages\ListUserChallenges::route('/'),
            'create' => Pages\CreateUserChallenge::route('/create'),
            'edit' => Pages\EditUserChallenge::route('/{record}/edit'),
        ];
    }
}
