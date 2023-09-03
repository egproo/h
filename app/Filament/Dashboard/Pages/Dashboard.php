<?php
 
namespace App\Filament\Dashboard\Pages;
 
use Filament\Pages\Dashboard as BasePage;
 use Illuminate\Contracts\View\View;

class Dashboard extends BasePage
{
protected static ?string $title = null;
protected ?string $heading = null;
protected ?string $subheading = null;
public function getHeader(): ?View
{
    return view('filament.includes.emptyheader');
}
}