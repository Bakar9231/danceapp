

<?php $__env->startSection('content'); ?>

  <!--**********************************

            Content body start

        ***********************************-->

        <div class="content-body">

            <div class="container-fluid">

                <div class="page-titles">

					<ol class="breadcrumb">

						<li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>

						<li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>

					</ol>

                </div>

                <!-- row -->



                <?php if(session('error') || session('message')): ?>

                <div class="alert alert-success" style="float: left; width: 100%;">

                <span class="<?php echo e(session('error') ? 'error':'success'); ?>"><?php echo e(session('error') ?? session('message')); ?></span>

            </div>

            <?php endif; ?>

                <div class="row">

					<div class="col-12">

                        <div class="card">

                            <div class="card-header">

                                <h4 class="card-title">Users Records</h4>

                            </div>

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table id="example3" class="display min-w850">

                                        <thead>

                                            <tr>

                                                <th></th>

                                                <th>Name</th>

                                                <th>Email</th>

                                                <th>Phone</th>

                                                <th>Date_of_Joining</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php if(isset($user)): ?>

                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>

                                                <td><img class="rounded-circle" width="35" src="<?php echo e(asset('dashboard/images/profile/small/pic1.jpg')); ?>" alt=""></td>

                                                <td> <?php echo e($val->name); ?></td>

                                                <td><a href="javascript:void(0);"><strong><?php echo e($val->email); ?></strong></a></td>

                                                

                                                <td><?php echo e($val->phone); ?></td>
                                                <td><?php echo e($val->created_at); ?></td>

                                                

                                                <td>

													<div class="d-flex">

														

														<a href="<?php echo e(route('deluser',$val->id)); ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

													</div>

												</td>

                                            </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php endif; ?>





                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

				</div>

            </div>

        </div>

        <!--**********************************

            Content body end

        ***********************************-->

        

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard-layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dance\resources\views/admin/user/index.blade.php ENDPATH**/ ?>