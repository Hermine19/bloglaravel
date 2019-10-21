<?php $__env->startSection('content'); ?>
    <div class="site-section bg-white">
        <div class="container">
            <h3><?php echo e($user->name); ?></h3>
            <div class="row">
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 mb-4">
                        <div class="entry2">
                            <a href="single.html"><img src="/<?php echo e($post->image); ?>" alt="Image" class="img-fluid rounded"></a>
                            <div class="excerpt">
                                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="post-category text-white bg-secondary mb-3"><?php echo e($cat1->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <h2><a href="single.html"><?php echo e($post->title); ?></a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 mr-3 float-left"><img src="/<?php echo e($post->image); ?>" alt="Image" class="img-fluid"></figure>
                                    <span class="d-inline-block mt-1">By <a href="#"><?php echo e($post->user->name); ?></a></span>
                                    <span>&nbsp;-&nbsp; <?php echo e(date('d M, Y',$post->CREATED_AT)); ?></span>
                                </div>

                                <p><?php echo e($post->short_text); ?></p>
                                <p><a href="<?php echo url("/post/{$post->id}"); ?>">Read More</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TravelAlone\resources\views/Pages/userposts.blade.php ENDPATH**/ ?>