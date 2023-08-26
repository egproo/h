<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PageResource extends Resource
{

    protected static ?string $model = Page::class;

    protected static ?int $navigationSort = 150;
    protected static ?string $navigationGroup = 'إدارة النظام';

    protected static ?string $navigationIcon = 'heroicon-m-document-text';
    protected static ?string $navigationLabel = 'الصفحات';
    protected static function getTitle() : string 
    {
        return 'الصفحات';
    } 
	public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')->label('عنوان الصفحة')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                   // ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Page::class, 'slug', ignoreRecord: true),

                                Forms\Components\RichEditor::make('content')->label('محتوى الصفحة')
                                    ->required()
                                    ->columnSpan('full'),
									
								Forms\Components\Textarea::make('keywords')->label('الكلمات الدلالية')
																	->required()
																	->columnSpan('full'),

                                Forms\Components\Toggle::make('status')
                                    ->label('الحالة')
                                    ->helperText('تحديد هل الصفحة منشورة أو معطلة')
                                    ->default(true),

                            ])
                            ->columns(2),

                        Forms\Components\Section::make('الصورة البارزة')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('الصورة البارزة')
                                    ->image()
                                    ->disableLabel(),
                            ])
                            ->collapsible(),
                    ])
                    ->columnSpan(['lg' => fn (?Page $record) => $record === null ? 3 : 3]),

            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('الصورة'),

                Tables\Columns\TextColumn::make('title')->label('العنوان')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('content')->label('المحتوى')
                    ->searchable()
                    ->sortable()
					->html()
                    ->toggleable(isToggledHiddenByDefault: true),					
                Tables\Columns\BadgeColumn::make('status')->label('الحالة')
                    ->getStateUsing(fn (Page $record): string => $record->status ? 'منشورة' : 'مسودة')
                    ->colors([
                        'success' => 'نشطة',
                    ]),


            ])
            ->filters([

            ])
            ->actions([
                //Tables\Actions\ViewAction::make(),

                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
