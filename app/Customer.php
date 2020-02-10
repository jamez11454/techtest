<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    'First_Name',
    'Last_Name',
    'Company',
    'Profession',
    'Chapter_Name',
    'Phone_Number',
    'AltPhone_Number',
    'Fax_Number',
    'Cell_Number',
    'Email',
    'Website',
    'Address',
    'City',
    'State',
    'ZIP',
    'Substitute',
    'Status',
    'Join_Date',
    'Renewal_Date',
    'Sponsor'
    ];

    // protected $dateFormat = 'm/d/Y';
}
