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
                +'<input type="file" name="updateimages[]" class="myfrm form-control">'
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
{{-- <script>
  $('#myList li:gt(8)').remove();
</script> --}}
