<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD3ntnnb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD3ntnnb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerD3ntnnb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerD3ntnnb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerD3ntnnb\appDevDebugProjectContainer(array(
    'container.build_hash' => 'D3ntnnb',
    'container.build_id' => '561cfd9c',
    'container.build_time' => 1555487810,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerD3ntnnb');
