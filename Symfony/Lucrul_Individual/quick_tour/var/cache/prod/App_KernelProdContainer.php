<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNb4PypK\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNb4PypK/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerNb4PypK.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerNb4PypK\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerNb4PypK\App_KernelProdContainer([
    'container.build_hash' => 'Nb4PypK',
    'container.build_id' => '534ce844',
    'container.build_time' => 1605479011,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNb4PypK');
