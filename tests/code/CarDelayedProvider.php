<?php

namespace yii\di\tests\code;

use yii\di\support\DelayedServiceProvider;


class CarDelayedProvider extends DelayedServiceProvider
{
    public function provides(): array
    {
        return [
            Car::class,
            CarFactory::class,
        ];
    }

    public function register(): void
    {
        $this->container->set(Car::class, Car::class);
        $this->container->set(CarFactory::class, CarFactory::class);
        $this->container->set(EngineInterface::class, EngineMarkOne::class);
    }
}