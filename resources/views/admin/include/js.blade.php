<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="{{asset('backend')}}/assets/plugins/input-tags/js/tagsinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#longdes'
    });
</script>

<script>
 @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif
</script>
  <script>
      $(function() {
          $(".knob").knob();
      });
  </script>
  <script src="{{asset('backend')}}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{asset('backend')}}/assets/js/app.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

<script>
    function previewImg(inputVal){
        if (inputVal.files && inputVal.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        jQuery("#imagePreview").attr("src",e.target.result);
    };
    reader.readAsDataURL(inputVal.files[0]);
}
    }




    function previewImages(inputVal) {
    if (inputVal.files && inputVal.files.length > 0) {
        $("#imagePreviews").empty(); // Clear previous previews

        $.each(inputVal.files, function(index, file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // Create an img element for each image and append it to the container
                $("<img>").attr("src", e.target.result).appendTo("#imagePreviews");
            };
            reader.readAsDataURL(file);
        });
    }
}

</script>



 
