<?php

namespace App\Filament\Resources\TruckBookingResource\Pages;

use App\Filament\Resources\TruckBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTruckBookings extends ListRecords
{
    protected static string $resource = TruckBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
