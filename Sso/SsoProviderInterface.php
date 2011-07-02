<?php

namespace BeSimple\SsoAuthBundle\Sso;

use Symfony\Component\HttpFoundation\Request;

interface SsoProviderInterface
{
    public function handleLogin();
    public function formatUsername($username);
    public function isValidationRequest(Request $request);
    public function createToken(Request $request);
    public function validateCredentials($credentials);
    public function processLogout();
}