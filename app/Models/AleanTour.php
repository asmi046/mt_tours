<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AleanTour extends Model
{
    protected $fillable = [
        'offerId',
        'tourName',
        'tourCID',
        'checkInDate',
        'checkOutDate',
        'hotelId',
        'hotelCID',
        'hotelUrl',
        'resortId',
        'hotelCategoryId',
        'mealId',
        'mealCode',
        'htPlaceName',
        'roomTypeName',
        'tourDate',
        'nights',
        'price',
        'hotelPrice',
        'hotelIsInStop',
        'ticketsIncluded',
        'hasEconomTicketsDpt',
        'hasEconomTicketsRtn',
        'hasBusinessTicketsDpt',
        'hasBusinessTicketsRtn',
        'fewPlacesInHotel',
        'fewTicketsDptY',
        'fewTicketsRtnY',
        'fewTicketsDptB',
        'fewTicketsRtnB',
        'flags',
        'description',
        'receivingParty',
        'earlyBookingValidTill',
        'finder',
        'line',
        'tline',
        'trline',
        'medical',
    ];

    protected $casts = [
        'checkInDate' => 'datetime',
        'checkOutDate' => 'datetime',
        'tourDate' => 'date',
    ];
}
