<div class="container">
<form class="form-inline" action="/search">
 <?php echo csrf_field(); ?>
 <label for="keyword">Kata kunci : </label>
 <input type="text" class="form-control" name="keyword">
 <button type="submit" class="btn btn-primary">Search</button>
</form>
 <h2>Daftar Artikel</h2>
<?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="panel panel-default" col=>
 <div class="panel-heading">
 <h3><?php echo e($a->title); ?><h3>
 </div>
 <div class="panel-body">
 <img src="<?php echo e($a->urlToImage); ?>">
 <p><?php echo e($a->description); ?><p>
 <p><?php echo e($a->url); ?><p>
 </div>
 </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH D:\restapi\laravel-news\resources\views/home.blade.php ENDPATH**/ ?>