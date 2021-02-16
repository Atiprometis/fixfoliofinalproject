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
            title: 'ยืนยันที่จะลบรูปภาพนี้',

            cancelButtonText: "ยกเลิก",
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: 'ยืนยัน',

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
            title: 'ยืนยันที่จะลบคอร์สที่เรียนจบอันนี้',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: "ยกเลิก",
            showCancelButton: true,

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

<script>
    var deleteExpwork = function(exp_works_id){

        Swal.fire({
            title: 'ยืนยันที่จะลบประสบการณ์ทำงานอันนี้',
            cancelButtonText: "ยกเลิก",
            confirmButtonText: 'ยืนยัน',
            showCancelButton: true,

        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = '{{url('/destroyExpwork/')}}/'+exp_works_id;
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
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<script>
    var count = 0;
    $('.addimageResult').click(function (e) {
        e.preventDefault();
        $(".clone-result").append(

                '<li class="col-3 p-0 m-0 mt-2" id="myList">'
                    + '<label  class="position-relative m-0">'
                        +'<img class="card-img-top insutition rounded" style="width: 90%; height:150px; cursor: pointer" id="upload'+count+'" src="{{ asset('access/imageweb/Placeholder.jpg') }}">'
                        +'<input type="file" class="photo custom-file-input" id="uploadPhoto'+count+'"  value="Placeholder.jpg" name="images[]" onchange="ShowImage'+count+'();" style="display: "/>'
                // "<img class="card-img-top insutition rounded" src='' id="uploadPreview"  style="width: 150p;height: 150px; cursor: pointer"/>"
                    +'</label>'
                + '</li>'
        );
        count++;
        // console.log(count);
    });
</script>

@for ($i = 0; $i < 8; $i++)
    <script type="text/javascript">
        function ShowImage{{ $i }}(resulutID) {
            var oFReader = new FileReader();
            var id = resulutID;
            oFReader.readAsDataURL(document.getElementById("uploadPhoto"+id+"{{ $i }}").files[0]);
            oFReader.onload = function (oFREvent) {
                document.getElementById("upload"+id+"{{ $i }}").src = oFREvent.target.result;
            };
        };
    </script>
@endfor

<script>

$('#checkbox-value').text($('#checkbox1').val());

$("#checkbox1").on('change', function() {
  if ($(this).is(':checked')) {
    $(this).attr('value', 'เปิดประวัติ');
    Swal.fire({
            title: 'เปิดประวัติ',
            confirmButtonText: 'ยืนยัน',
            showCancelButton: true,
            cancelButtonText: "ยกเลิก",
        })
  } else {
    $(this).attr('value', 'ปิดประวัติ');
  }

  $('#checkbox-value').text($('#checkbox1').val());
});
    // $('#switch-change').on('change.bootstrapSwitch', function () {
    //     console.log(1);
    // });
</script>



{{-- <script>
    document.getElementsByClassName
</script> --}}
