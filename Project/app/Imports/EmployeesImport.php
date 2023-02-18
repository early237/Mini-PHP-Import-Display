<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    

    public function model(array $row)
    {
        /* $employee = new Employee([
            'firstName' => $row[0],
            'lastName' => $row[1],
            'email' => $row[2],
            'profession' => $row[3],
            'chapterName' => $row[4],
            'companyName' => $row[5],
            'website' => $row[6],
            'address' => $row[7],
            'postcode' => $row[8],
            'phoneNumber' => $row[9],
            'status' => $row[10],
            'joinDate' => $row[11],
            'renewalDate' => $row[12],
            'sponsor' => $row[13], */

            $employee = new Employee([
                'firstName' => $row['First Name'],
                'lastName' => $row['Last Name'],
                'email' => $row['Email'],
                'profession' => $row['Profession'],
                'chapterName' => $row['Chapter Name'],
                'companyName' => $row['Company Name'],
                'website' => $row['Website'],
                'address' => $row['Address'],
                'postcode' => $row['Postcode'],
                'phoneNumber' => $row['Phone number'],
                'status' => $row['Status'],
                'joinDate' => $row['Join Date'],
                'renewalDate' => $row['Renewal Date'],
                'sponsor' => $row['Sponsor'],
            
   
        ]);

        return $employee;
    }
}
