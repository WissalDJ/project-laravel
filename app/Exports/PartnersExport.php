<?php

namespace App\Exports;

use App\Models\Partner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PartnersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Partner::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Prenom',
            'Telephone',
            'Email',
            'Nom Entreprise',
            'Address',
            'Image ',
            'Created At',
            'Updated At',
        ];
    }
}