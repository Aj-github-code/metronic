<?php
namespace App\Helpers;
use App\Helpers\StaticData as StaticData;

class StaticData{


    public static function identityProof(){
        return $identityProof =   [
            'Aadhaar Card, issued by Unique Identification Authority of India.',
            'Voter ID Card issued by the Election Commission of India.',
            'Indian Passport, issued by Ministry of External Affairs of the Republic of India',
            'PAN Card, issued by the Income Tax Department.',
            'Driving license in India issued by the respective state governments'
        ];
    }
    public static function addressProof(){
        return $addressProof =   [
            'Aadhaar Card, issued by Unique Identification Authority of India.',
            'Voter ID Card issued by the Election Commission of India.',
            'Indian Passport, issued by Ministry of External Affairs of the Republic of India',
            'PAN Card, issued by the Income Tax Department.',
            'Driving license in India issued by the respective state governments',
            'Bank Statement (not older than 3 months)',
            'Electricity Bill (Prepaid/Post-paid bill, not older than 3 months)',
            'Telephone Landline Bill/ Post-paid Mobile Bill/ Broadband Bill (not older than 3 months)',
            'Water Bill (not older than 3 months)',
            'Valid Registered Sale Agreement/ Registered Gift Deed in Registrar office/ Registered or Non-Registered Rent/ Lease Agreement / Leave and License Agreement',
            'Gas Connection Bill (not older than 3 months)'

        ];
    }
    
}
?>