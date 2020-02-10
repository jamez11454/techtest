<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'First_Name'          => $row['first_name'],
            'Last_Name'           => $row['last_name'],
            'Company'            => $row['company'],
            'Profession'         => $row['profession'],
            'Chapter_Name'        => $row['chapter_name'],
            'Phone_Number'       => $row['phone_number'],
            'Alt_Phone_Number'   => $row['alt_phone_number'],
            'Fax_Number'         => $row['fax_number'],
            'Cell_Number'        => $row['cell_number'],
            'Email'              => $row['email'],
            'Website'            => $row['website'],
            'Address'            => $row['address'],
            'City'               => $row['city'],
            'State'              => $row['state'],
            'ZIP'                => $row['zip'],
            'Substitute'         => $row['substitute'],
            'Status'             => $row['status'],
            'Join_Date'          => $row['join_date'],
            'Renewal_Date'       => $row['renewal_date'],
            'Sponsor'            => $row['sponsor'],
        ]);
    }
}
