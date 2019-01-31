<?php

namespace Inkl\ValueCareApi\Contract;

interface ClientConfigInterface
{
    const COMPANY_WG = 'WG';
    const COMPANY_EWP = 'EWP';

    public function getUser();

    public function getPassword();

    public function getCompany();

    public function getRole();

    public function getLastSession();

}