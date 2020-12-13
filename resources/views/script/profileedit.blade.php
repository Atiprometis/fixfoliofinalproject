<script>
  
    $(document).ready(function () {
     
      // $( "#dialog" ).dialog({
      //   autoOpen: false,
      //   show: {
      //     effect: "blind",
      //     duration: 1000
      //   },
      //   hide: {
      //     effect: "explode",
      //     duration: 1000
      //   }
      // });
      

      $( "#opener" ).click(function() {
          
        $( "#dialog" ).dialog( "open" );
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
} );
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
{{-- + '<div class="input-group-btn>'
  +'<button class="btn btn-danger" id="removeall" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>'
+ '</div>' --}}
{{-- <script>
  $(document).ready(function () {
    $(".btn-danger").click( function () {
      $("hdtuto").htm().remove(); 
    });
  });
</script> --}}


{{-- <script>
  var InputsWrapper   = $("#fields");
var x = InputsWrapper.length; 
var FieldCount=1; 

$(document).on('click','.add', function(e){
FieldCount++; 
$(InputsWrapper).append('<div class="newField"><button class="remove">Remove</button><button class="add">Add</button><div class="check"><input type="radio" id="field_'+ FieldCount +'" name="correct"></div><input type="text" id="input_'+ FieldCount +'" /></div></div>');
x++;
return false;
});

$(document).on("click",".remove", function(e){ 
   if( x > 1 ) {
     $(this).parent('div').remove(); 
     x--; 
   }
  return false;
});
</script> --}}