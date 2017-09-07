
<?php $__env->startSection('content'); ?>
    <div class="business-index">
        <?php echo $__env->make('admin.layouts.Message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <table class="table table-bordered table-hover table-hover text-center">
            <tr>
                <th class="text-center" colspan="6">在线核名-名单</th>
            </tr>
            <tr>
                <td>序列</td>
                <td>客户手机号</td>
                <td>客户预成立公司名称</td>
                <td>创建时间</td>
                <td>更新时间</td>
                <td>操作</td>
            </tr>
            <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(($res->currentPage()*10-10)+($loop->index + 1)); ?></td>
                    <td><?php echo e($lp->lp_phone); ?></td>
                    <td><?php echo e($lp->lp_company); ?></td>
                    <td><?php echo e($lp->created_at); ?></td>
                    <td><?php echo e($lp->updated_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('bus_update',['id' => $lp->id])); ?>"><button class="btn btn-success">修改</button></a>
                        <a href="<?php echo e(route('bus_del',['id' => $lp->id])); ?>"><button class="btn btn-danger">删除</button></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <?php echo e($res->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>