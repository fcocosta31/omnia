<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOth6vrz\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOth6vrz/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOth6vrz.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOth6vrz\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerOth6vrz\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Oth6vrz',
    'container.build_id' => 'fa907ed0',
    'container.build_time' => 1548414279,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOth6vrz');
