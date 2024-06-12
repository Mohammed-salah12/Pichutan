<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('author_name')->required(),
                Forms\Components\MarkdownEditor::make('author_info')->required(),
                Forms\Components\MarkdownEditor::make('content')->required(),
                Forms\Components\FileUpload::make('image')->nullable(),
                Forms\Components\TextInput::make('email')->label('email')->email()->required(),
                Forms\Components\Checkbox::make('is_published')->label('publish'),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
             Tables\Columns\TextColumn::make('title'),
             Tables\Columns\TextColumn::make('author_name'),
             Tables\Columns\TextColumn::make('email')->label('author email'),
              Tables\Columns\ToggleColumn::make('is_published')->label('publish'),
                Tables\Columns\ImageColumn::make('image')->circular()->disk('public'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
