<!--**********************************

            Footer start

        ***********************************-->

        <div class="footer">

            <div class="copyright">

                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>

            </div>

        </div>

        <!--**********************************

            Footer end

        ***********************************-->



        <!--**********************************

           Support ticket button start

        ***********************************-->



        <!--**********************************

           Support ticket button end

        ***********************************-->





    </div>

    <!--**********************************

        Main wrapper end

    ***********************************-->



    <!--**********************************

        Scripts

    ***********************************-->

    <!-- Required vendors -->

    <script src="<?php echo e(asset('dashboard/vendor/global/global.min.js')); ?>"></script>

	<script src="<?php echo e(asset('dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>"></script>

    <script src="<?php echo e(asset('dashboard/vendor/chart.js/Chart.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('dashboard/js/custom.min.js')); ?>"></script>

	<script src="<?php echo e(asset('dashboard/js/deznav-init.js')); ?>"></script>

    <script src="<?php echo e(asset('dashboard/vendor/owl-carousel/owl.carousel.js')); ?>"></script>



	<!-- Chart piety plugin files -->

    <script src="<?php echo e(asset('dashboard/vendor/peity/jquery.peity.min.js')); ?>"></script>



	<!-- Apex Chart -->

	<script src="<?php echo e(asset('dashboard/vendor/apexchart/apexchart.js')); ?>"></script>



    	<!-- Dashboard 1 -->

	<script src="<?php echo e(asset('dashboard/js/dashboard/dashboard-1.js')); ?>"></script>

	<script>

		function carouselReview(){

			/*  testimonial one function by = owl.carousel.js */

			jQuery('.testimonial-one').owlCarousel({

				loop:true,

				autoplay:true,

				margin:30,

				nav:false,

				dots: false,

				left:true,

				navText: ['', ''],

				responsive:{

					0:{

						items:1

					},

					800:{

						items:1

					},

					991:{

						items:2

					},



					1200:{

						items:2

					},

					1600:{

						items:3

					}

				}

			})

		}

		jQuery(window).on('load',function(){

			setTimeout(function(){

				carouselReview();

			}, 1000);

		});

	</script>



    <!-- Datatable -->

    <script src="<?php echo e(asset('dashboard/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>

    <script src="<?php echo e(asset('dashboard/js/plugins-init/datatables.init.js')); ?>"></script>



</body>



<!-- Mirrored from qerza.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 05:45:12 GMT -->

</html>

<?php /**PATH D:\xampp\htdocs\dance\resources\views/dashboard-layouts/footer.blade.php ENDPATH**/ ?>