<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1dNHxTa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1dNHxTa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1dNHxTa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1dNHxTa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1dNHxTa\App_KernelDevDebugContainer([
    'container.build_hash' => '1dNHxTa',
    'container.build_id' => '6176faf2',
    'container.build_time' => 1607642900,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1dNHxTa');
