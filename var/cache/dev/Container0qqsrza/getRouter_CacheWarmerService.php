<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'router.cache_warmer' shared service.

return $this->services['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(\call_user_func(array(new \Symfony\Component\DependencyInjection\ServiceLocator(array('router' => function () {
    return ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};
})), 'withContext'), 'router.cache_warmer', $this));
