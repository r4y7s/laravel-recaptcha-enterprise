<?php

declare(strict_types=1);

namespace Oneduo\RecaptchaEnterprise\Tests;

use Oneduo\RecaptchaEnterprise\Contracts\RecaptchaContract;
use Oneduo\RecaptchaEnterprise\RecaptchaEnterpriseServiceProvider;
use Oneduo\RecaptchaEnterprise\Testing\Fakes\FakeRecaptchaEnterprise;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app): array
    {
        return [
            RecaptchaEnterpriseServiceProvider::class,
            DummyServiceProvider::class,
        ];
    }

    protected function fakeRecaptchaEnterprise(): void
    {
        $this->swap(RecaptchaContract::class, new FakeRecaptchaEnterprise());
    }

}
