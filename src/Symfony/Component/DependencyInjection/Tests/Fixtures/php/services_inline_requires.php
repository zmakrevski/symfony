<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    protected $parameters = [];
    protected readonly \WeakReference $ref;

    public function __construct()
    {
        $this->ref = \WeakReference::create($this);
        $this->services = $this->privates = [];
        $this->methodMap = [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists' => 'getParentNotExistsService',
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath\\C1' => 'getC1Service',
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath\\C2' => 'getC2Service',
        ];

        $this->aliases = [];

        $this->privates['service_container'] = static function ($container) {
            include_once \dirname(__DIR__, 1).'/includes/HotPath/I1.php';
            include_once \dirname(__DIR__, 1).'/includes/HotPath/P1.php';
            include_once \dirname(__DIR__, 1).'/includes/HotPath/T1.php';
            include_once \dirname(__DIR__, 1).'/includes/HotPath/C1.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath\\C3' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\Component\DependencyInjection\Tests\Fixtures\ParentNotExists' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\ParentNotExists
     */
    protected static function getParentNotExistsService($container)
    {
        return $container->services['Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\ParentNotExists();
    }

    /**
     * Gets the public 'Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C1
     */
    protected static function getC1Service($container)
    {
        return $container->services['Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath\\C1'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C1();
    }

    /**
     * Gets the public 'Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C2
     */
    protected static function getC2Service($container)
    {
        include_once \dirname(__DIR__, 1).'/includes/HotPath/C2.php';
        include_once \dirname(__DIR__, 1).'/includes/HotPath/C3.php';

        return $container->services['Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath\\C2'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C2(new \Symfony\Component\DependencyInjection\Tests\Fixtures\includes\HotPath\C3());
    }
}
