<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public static function canAccess(): bool
    {
        return auth()->user()->canManageSettings();
    }

    public function testingAction(): Action
    {
        return Action::make('testing')
            ->requiresConfirmation()
            ->action(fn() => Notification::make()->title('succeess')->send());
    }

    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->requiresConfirmation()
            ->action(fn() => $this->client);
    }

    public function getModel(int $id){
        return $this->client->find($id);
    }
}
