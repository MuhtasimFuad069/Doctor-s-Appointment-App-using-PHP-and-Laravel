

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

<?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->

<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
<div class="container-fluid page-body-wrapper">
  <div align="center" style="padding:100px;">
    <table>
      <tr style="background-color:black";>
        <th style="padding:10px">Doctor name</th>
        <th style="padding:10px">Phone</th>
        <th style="padding:10px">Speciality</th>
        <th style="padding:10px">Room No</th>
        <th style="padding:10px">Image</th>
        <th style="padding:10px">Delete</th>
        <th style="padding:10px">Update</th>

      </tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr align="center" style="background-color:maroon">
        <td><?php echo e($doctor->name); ?></td>
        <td><?php echo e($doctor->phone); ?></td>
        <td><?php echo e($doctor->speciality); ?></td>
        <td><?php echo e($doctor->room); ?></td>
        <td><img height="500" width= "500" src="doctorimage/<?php echo e($doctor->image); ?>">

        <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="<?php echo e(url('deletedoctor',$doctor->id)); ?>">Delete</a>

        </td><td><a class="btn btn-primary" href="<?php echo e(url('updatedoctor'),$doctor->id); ?>">Update</a>
        </td>

      </td>

      </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <!-- container-scroller -->
    <!-- plugins:js -->

<?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH C:\Project\Health\resources\views/admin/showdoctor.blade.php ENDPATH**/ ?>