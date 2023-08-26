<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?int $navigationSort = 150;
    protected static ?string $navigationGroup = 'إدارة النظام';

    protected static ?string $navigationIcon = 'heroicon-m-tag';
    protected static ?string $navigationLabel = 'الأسئلة المتكررة';
    protected static function getTitle() : string 
    {
        return 'الأسئلة المتكررة';
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
                                Forms\Components\TextInput::make('question')->label('السؤال المتكرر')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                   // ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(Faq::class, 'slug', ignoreRecord: true),

                                Forms\Components\RichEditor::make('answer')->label('الإجابة')
                                    ->required()
                                    ->columnSpan('full'),

                                Forms\Components\TextInput::make('meta_title')->label('عنوان لمحركات البحث')
                                    ->required()
									->minLength(2)
									->maxLength(70)									
                                    ->columnSpan('full'),

                                Forms\Components\Textarea::make('meta_description')->label('وصف لمحركات البحث( حد أقصى 120 حرف )')
                                    ->required()
									->minLength(2)
									->rows(2)
									->maxLength(120)
                                    ->columnSpan('full'),

                                Forms\Components\Toggle::make('status')
                                    ->label('الحالة')
                                    ->helperText('تحديد هل السؤال منشور أو لا')
                                    ->default(true),

                            ])
                            ->columns(2),

                        Forms\Components\Section::make('الصورة')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('الصورة')
                                    ->image()
                                    ->disableLabel(),
                            ])
                            ->collapsible(),
                    ])
                    ->columnSpan(['lg' => fn (?Faq $record) => $record === null ? 3 : 3]),

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

                Tables\Columns\TextColumn::make('question')->label('السؤال')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('answer')->label('الإجابة')
                    ->searchable()
                    ->sortable()
					->html()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('meta_title')->label('عنوان البحث')
                    ->searchable()
                    ->sortable()
					->html()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('meta_description')->label('وصف البحث')
                    ->searchable()
                    ->sortable()
					->html()
                    ->toggleable(isToggledHiddenByDefault: true),					
                Tables\Columns\BadgeColumn::make('status')->label('الحالة')
                    ->getStateUsing(fn (Faq $record): string => $record->status ? 'منشور' : 'مسودة')
                    ->colors([
                        'success' => 'منشور',
                    ]),
            ])
            ->filters([
                //
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }    
}
