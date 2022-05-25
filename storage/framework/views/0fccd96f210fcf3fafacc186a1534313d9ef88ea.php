<?php $__env->startSection('content'); ?>
<div class="container">
    
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/article/<?php echo e($memo->id); ?>">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="flex">
                <div class="px-6 py-4">
                    <h2 class="text-xl mb-2 font-bold"><?php echo e($memo->title); ?></h2>
                    <p class="text-gray-700 text-base"><?php echo e($memo->content); ?></p>
                </div>
                <button><a href="<?php echo e(url('/delete/{id}')); ?>">削除する</a></button>
                <button><a href="/edit/<?php echo e($memo->id); ?>">編集する</a></button>
                </div><!-- /.flex -->
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
          </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/satouitsuki/Laravel-blog/resources/views/home.blade.php ENDPATH**/ ?>