<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2WNLvhg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2WNLvhg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2WNLvhg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2WNLvhg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2WNLvhg\App_KernelDevDebugContainer([
    'container.build_hash' => '2WNLvhg',
    'container.build_id' => 'f3e85be1',
    'container.build_time' => 1710980714,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container2WNLvhg');