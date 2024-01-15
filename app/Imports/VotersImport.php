<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VotersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $voter = new User();
        $voter->user_name = $row["user_name"];
        $voter->email = $row["email"];
        $voter->password = Hash::make("12345");
        $voter->date_of_birth = $row["date_of_birth"];
        $voter->mobile_number = $row["mobile_number"];
        $voter->address = $row["address"];
        $voter->national_id =$row["national_id"];
        $voter->gender = $row["gender"];
        $voter->role = "user";
        $voter->save();

        return $voter;
    }
}
