<?php

class ProceedingResult
{
    public
        $DebtorsAddress,
        $ProposersAddress,
        $AdministratorsAddress,
        $CourtsAddress,
        $ReferenceFileNumber,
        $Status,
        $Character,
        $EndReason,
        $Url,
        $Type,
        $PublishDate;
}
class Address
{
    public
        $Name,
        $Street,
        $StreetNumber,
        $ZipCode,
        $City,
        $Country,
        $Region;
}
class PersonAddress extends Address
{
    public
        $BirthDate,
        $Ico;
}
?>