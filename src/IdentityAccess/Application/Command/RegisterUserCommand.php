<?php

namespace SaasOvation\IdentityAccess\Application\Command;

use DateTimeInterface;

class RegisterUserCommand
{
    private $tenantId;
    private $invitationIdentifier;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $enabled;
    private $startDate;
    private $endDate;
    private $emailAddress;
    private $primaryTelephone;
    private $secondaryTelephone;
    private $addressStreetAddress;
    private $addressCity;
    private $addressStateProvince;
    private $addressPostalCode;
    private $addressCountryCode;

    public function __construct(
        $tenantId,
        $invitationIdentifier,
        $username,
        $password,
        $firstName,
        $lastName,
        $enabled,
        $startDate,
        $endDate,
        $emailAddress,
        $primaryTelephone,
        $secondaryTelephone,
        $addressStreetAddress,
        $addressCity,
        $addressStateProvince,
        $addressPostalCode,
        $addressCountryCode
    ) {
        $this->tenantId = $tenantId;
        $this->invitationIdentifier = $invitationIdentifier;
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->enabled = $enabled;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->emailAddress = $emailAddress;
        $this->primaryTelephone = $primaryTelephone;
        $this->secondaryTelephone = $secondaryTelephone;
        $this->addressStreetAddress = $addressStreetAddress;
        $this->addressCity = $addressCity;
        $this->addressStateProvince = $addressStateProvince;
        $this->addressPostalCode = $addressPostalCode;
        $this->addressCountryCode = $addressCountryCode;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    public function getInvitationIdentifier()
    {
        return $this->invitationIdentifier;
    }

    public function setInvitationIdentifier($invitationIdentifier)
    {
        $this->invitationIdentifier = $invitationIdentifier;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate(DateTimeInterface $startDate = null)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate(DateTimeInterface $endDate = null)
    {
        $this->endDate = $endDate;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getPrimaryTelephone()
    {
        return $this->primaryTelephone;
    }

    public function setPrimaryTelephone($primaryTelephone)
    {
        $this->primaryTelephone = $primaryTelephone;
    }

    public function getSecondaryTelephone()
    {
        return $this->secondaryTelephone;
    }

    public function setSecondaryTelephone($secondaryTelephone)
    {
        $this->secondaryTelephone = $secondaryTelephone;
    }

    public function getAddressStreetAddress()
    {
        return $this->addressStreetAddress;
    }

    public function setAddressStreetAddress($addressStreetAddress)
    {
        $this->addressStreetAddress = $addressStreetAddress;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
    }

    public function getAddressStateProvince()
    {
        return $this->addressStateProvince;
    }

    public function setAddressStateProvince($addressStateProvince)
    {
        $this->addressStateProvince = $addressStateProvince;
    }

    public function getAddressPostalCode()
    {
        return $this->addressPostalCode;
    }

    public function setAddressPostalCode($addressPostalCode)
    {
        $this->addressPostalCode = $addressPostalCode;
    }

    public function getAddressCountryCode()
    {
        return $this->addressCountryCode;
    }

    public function setAddressCountryCode($addressCountryCode)
    {
        $this->addressCountryCode = $addressCountryCode;
    }
}
