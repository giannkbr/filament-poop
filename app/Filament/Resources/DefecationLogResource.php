<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DefecationLogResource\Pages;
use App\Filament\Resources\DefecationLogResource\RelationManagers;
use App\Models\DefecationLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;

class DefecationLogResource extends Resource
{
    protected static ?string $model = DefecationLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-frown';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),
            Forms\Components\DatePicker::make('date')->required(),
            Forms\Components\TimePicker::make('time')->required(),
            Forms\Components\Textarea::make('note')->nullable(),
            Forms\Components\Select::make('type')->options([
                'solid' => 'Solid',
                'loose' => 'Loose',
                'diarrhea' => 'Diarrhea',
            ])->required(),
            Forms\Components\Select::make('color')->options([
                'brown' => 'Brown',
                'green' => 'Green',
                'yellow' => 'Yellow',
                'black' => 'Black',
                'red' => 'Red',
                'white' => 'White',
            ])->required(),
            Forms\Components\Select::make('smell')->options([
                'normal' => 'Normal',
                'foul' => 'Foul',
                'sweet' => 'Sweet',
            ])->required(),
            Forms\Components\Select::make('amount')->options([
                'normal' => 'Normal',
                'small' => 'Small',
                'large' => 'Large',
            ])->required(),
            Forms\Components\Select::make('consistency')->options([
                'hard' => 'Hard',
                'soft' => 'Soft',
                'watery' => 'Watery',
            ])->required(),
            Forms\Components\Select::make('blood')->options([
                'yes' => 'Yes',
                'no' => 'No',
            ])->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name')->label('User')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('date')->date(),
            Tables\Columns\TextColumn::make('time')->time(),
            Tables\Columns\TextColumn::make('note')->limit(200)->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('type')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('color')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('smell')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('amount')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('consistency')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
            Tables\Columns\TextColumn::make('blood')->formatStateUsing(fn ($state) => ucfirst(strtolower($state))),
        ])
        ->filters([
            SelectFilter::make('type')->options([
                'solid' => 'Solid',
                'loose' => 'Loose',
                'diarrhea' => 'Diarrhea',
            ], 'Type', ['solid', 'loose', 'diarrhea']),
            SelectFilter::make('color')->options([
                'brown' => 'Brown',
                'green' => 'Green',
                'yellow' => 'Yellow',
                'black' => 'Black',
                'red' => 'Red',
                'white' => 'White',
            ], 'Color', ['brown', 'green', 'yellow', 'black', 'red', 'white']),
            SelectFilter::make('smell')->options([
                'normal' => 'Normal',
                'foul' => 'Foul',
                'sweet' => 'Sweet',
            ], 'Smell', ['normal', 'foul', 'sweet']),
            SelectFilter::make('amount')->options([
                'normal' => 'Normal',
                'small' => 'Small',
                'large' => 'Large',
            ], 'Amount', ['normal', 'small', 'large']),
            SelectFilter::make('consistency')->options([
                'hard' => 'Hard',
                'soft' => 'Soft',
                'watery' => 'Watery',
            ], 'Consistency', ['hard', 'soft', 'watery']),
            SelectFilter::make('blood')->options([
                'yes' => 'Yes',
                'no' => 'No',
            ], 'Blood', ['yes', 'no']),
        ], layout: FiltersLayout::AboveContentCollapsible)
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDefecationLogs::route('/'),
            'create' => Pages\CreateDefecationLog::route('/create'),
            'edit' => Pages\EditDefecationLog::route('/{record}/edit'),
        ];
    }
}
