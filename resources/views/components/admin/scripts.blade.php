<script src="{{ asset('assets-admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/ready.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/demo.js') }}"></script>
<script src="{{ asset('assets-admin/summernote/summernote-bs4.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
    // $(document).ready(function() {
    $('.main-table').DataTable();

    $('.summernote').summernote({
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ],
        fontNames: ['Arial', 'Arial Black', 'Nunito', 'Courier New'],
        fontNamesIgnoreCheck: ['Nutino'],
        popover: {
            image: [
                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
            link: [
                ['link', ['linkDialogShow', 'unlink']]
            ],
            table: [
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
            ],
            air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']]
            ]
        }
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            $('.preview-image').css('display', '')
            $('.preview-image').attr("src", URL.createObjectURL(event.target.files[0]));
            $('.preview-image').on('load', function() {
                URL.revokeObjectURL($('.preview-image').attr("src"))
            })
        }
    }

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

            element.addEventListener('click', function(e) {

                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector(
                            '.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
    });
    // DOMContentLoaded  end

    // Ini adalah Convert dari File ke Base 64
    const fileToBase64 = async (file) => {
        return new Promise((resolve, reject) => {
            const reader = new FileReader()
            reader.readAsDataURL(file)
            reader.onload = () => resolve(reader.result)
            reader.onerror = (e) => reject(e)
        })
    }

    // Upload Image Summernote
    function uploadImage(base64) {
			data = { 'base64' : base64 }
			$.ajax({
				data: data,
				type: "POST",
				url: "nanti",
				cache: false,
				success: filename => {
					const img = '<img class="img-fluid" src="/public/uploads/summernotes/'+filename+'" alt="">'
					$('#summernote').summernote('editor.pasteHTML', img);
				}
			});
		}
</script>
