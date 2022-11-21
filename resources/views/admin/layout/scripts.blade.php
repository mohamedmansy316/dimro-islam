

      <!-- Datatable -->
      <script src="{{url('public/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{url('public/admin/js/plugins-init/datatables.init.js')}}"></script>

    <script src="{{url('public/admin/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{url('public/admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{url('public/admin/js/plugins-init/jquery.validate-init.js')}}"></script>
    <!-- Form Steps -->
	<script src="{{url('public/admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
    <script src="{{url('public/admin/vendor/global/global.min.js')}}"></script>
	<script src="{{url('public/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{url('public/admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{url('public/admin/js/custom.min.js')}}"></script>
	<script src="{{url('public/admin/js/deznav-init.js')}}"></script>
	<script src="{{url('public/admin/vendor/owl-carousel/owl.carousel.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{url('public/admin/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{url('public/admin/vendor/apexchart/apexchart.js')}}"></script>
	<!-- Text Editor -->
    <script src="{{url('public/admin/js/froala_editor.pkgd.min.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{url('public/admin/js/dashboard/dashboard-1.js')}}"></script>
	<script>
		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},

					1150:{
						items:3
					},

					1200:{
						items:2
					},
					1749:{
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
        var Slug;
        $('input[name="title"]').keyup(function() {
            Slug = $(this).val().replace(/[&\/\\#,+()$~%.'":*?<>{} ]/g, '-').replace(/[\[\]']/g,'-').replace(/--/g, '-').toLowerCase();
            $('input[name="slug"]').val(Slug);
        });
        var Slug;
        $('input[name="name"]').keyup(function() {
            Slug = $(this).val().replace(/[&\/\\#,+()$~%.'":*?<>{} ]/g, '-').replace(/[\[\]']/g,'-').replace(/--/g, '-').toLowerCase();
            $('input[name="slug"]').val(Slug);
        });


//         tinymce.init({
//         selector: 'textarea#editor',
//         plugins: [ 'table powerpaste',
//                    'lists media',
//                    'paste' ],
//         toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify',
//         toolbar_mode: 'floating',
// //         tinycomments_mode: 'embedded',
// //         tinycomments_author: 'Author name',
// //         image_title: true,
// //   /* enable automatic uploads of images represented by blob or data URIs*/
// //   automatic_uploads: true,
// //   /*
// //     URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
// //     images_upload_url: 'postAcceptor.php',
// //     here we add custom filepicker only to Image dialog
// //   */
// //   file_picker_types: 'image',
// //   /* and here's our custom image picker*/
// //   file_picker_callback: function (cb, value, meta) {
// //     var input = document.createElement('input');
// //     input.setAttribute('type', 'file');
// //     input.setAttribute('accept', 'image/*');

// //     /*
// //       Note: In modern browsers input[type="file"] is functional without
// //       even adding it to the DOM, but that might not be the case in some older
// //       or quirky browsers like IE, so you might want to add it to the DOM
// //       just in case, and visually hide it. And do not forget do remove it
// //       once you do not need it anymore.
// //     */

// //     input.onchange = function () {
// //       var file = this.files[0];

// //       var reader = new FileReader();
// //       reader.onload = function () {
// //         /*
// //           Note: Now we need to register the blob in TinyMCEs image blob
// //           registry. In the next release this part hopefully won't be
// //           necessary, as we are looking to handle it internally.
// //         */
// //         var id = 'blobid' + (new Date()).getTime();
// //         var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
// //         var base64 = reader.result.split(',')[1];
// //         var blobInfo = blobCache.create(id, file, base64);
// //         blobCache.add(blobInfo);

// //         /* call the callback and populate the Title field with the file name */
// //         cb(blobInfo.blobUri(), { title: file.name });
// //       };
// //       reader.readAsDataURL(file);
// //     };

// //     input.click();
// //   },
//     });

var editor = new FroalaEditor('#textEditor');
	</script>

