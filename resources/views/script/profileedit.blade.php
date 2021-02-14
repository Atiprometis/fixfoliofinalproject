<script>

    $(document).ready(function () {

      $( "#opener" ).click(function() {
        $( "#insertimage" ).dialog( {
	height: 500,
	width: 500,
	modal: true,
    resizable: false,
	dialogClass: 'no-close success-dialog'
});

});
  });

</script>

<script>

  $(document).ready(function () {

    $( "#openerupdate" ).click(function() {
      // var height = $( "#updateimages" ).dialog( "option", "height" );
      $( "#updateimages" ).dialog( {
	height: 500,
	width: 500,
	modal: true,
    resizable: false,
	dialogClass: 'no-close success-dialog'
});
    });


});

</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-success").click(function(){
        $(".clone").append(

            '<div class="hdtuto control-group lst input-group" style="margin-top:10px>'
               +'<div class="input-group-btn">'
                +'<input type="file" name="images[]" class="myfrm form-control">'
                +'<button class="btn btn-danger" id="removeall" type="button">'
                  +'<i class="fldemo glyphicon glyphicon-remove"></i> Remove'
                +'</button>'
               +'</div>'
            +'</div>'

          );
    });

    $('.clone').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    $(this).parent().remove();
  });

  });
</script>

<script>
    var deleteimages = function(course_final_id){

        Swal.fire({
            title: 'ยืนยันลบรูปภาพนี้',
            confirmButtonText: 'ยืนยัน',
            showCancelButton: true,
            cancelButtonText: "ยกเลิก",
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = '{{url('/destroyImagecourses/')}}/'+course_final_id;
                Swal.fire('ลบสำเร็จ!', '', 'success')
            }else{
                // Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
</script>
<script>
    var deleteresult = function(course_final_id){

        Swal.fire({
            title: 'ยืนยันคอร์สที่เรียนจบอันนี้',
            confirmButtonText: 'ยืนยัน',
            showCancelButton: true,
            cancelButtonText: "ยกเลิก",
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = '{{url('/destroyResult/')}}/'+course_final_id;
                Swal.fire('ลบสำเร็จ!', '', 'success')
            }else{
                // Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
</script>

<script type="text/javascript">

    function PreviewImage0() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage0").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview0").src = oFREvent.target.result;
        };

    };

</script>

<script type="text/javascript">

    function PreviewImage1() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview1").src = oFREvent.target.result;
        };

    };

</script>
<script type="text/javascript">

    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview2").src = oFREvent.target.result;
        };

    };

</script>
<script type="text/javascript">

    function PreviewImage3() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview3").src = oFREvent.target.result;
        };

    };

</script>

<script type="text/javascript">

    function PreviewImage4() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview4").src = oFREvent.target.result;
        };

    };

</script>
<script type="text/javascript">

    function PreviewImage5() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage5").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview5").src = oFREvent.target.result;
        };

    };

</script>
<script type="text/javascript">

    function PreviewImage6() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage6").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview6").src = oFREvent.target.result;
        };

    };

</script>
<script type="text/javascript">

    function PreviewImage7() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage7").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview7").src = oFREvent.target.result;
        };

    };

</script>

<script type="text/javascript">

    function PreviewImage8() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage8").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview8").src = oFREvent.target.result;
        };
    };
</script>
