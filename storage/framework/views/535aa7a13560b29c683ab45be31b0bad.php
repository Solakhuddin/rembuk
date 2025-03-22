<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <title><?php echo e($title); ?></title>
    
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php if(Auth::check()): ?>
        <meta name="jwt-token" content="<?php echo e(session('jwt_token')); ?>">
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <meta name="user-id" content="<?php echo e(auth()->id()); ?>">
    <?php endif; ?>    
</head>
<body class="bg-gray-100">
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
    <div class="">
        <?php if (isset($component)) { $__componentOriginalc2de825d4e33209ddffb818784ae7904 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2de825d4e33209ddffb818784ae7904 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.side-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('side-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2de825d4e33209ddffb818784ae7904)): ?>
<?php $attributes = $__attributesOriginalc2de825d4e33209ddffb818784ae7904; ?>
<?php unset($__attributesOriginalc2de825d4e33209ddffb818784ae7904); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2de825d4e33209ddffb818784ae7904)): ?>
<?php $component = $__componentOriginalc2de825d4e33209ddffb818784ae7904; ?>
<?php unset($__componentOriginalc2de825d4e33209ddffb818784ae7904); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

    </div>
    
    
        
    
</body>
</html><?php /**PATH C:\laragon\www\rembuk\resources\views/components/layout.blade.php ENDPATH**/ ?>