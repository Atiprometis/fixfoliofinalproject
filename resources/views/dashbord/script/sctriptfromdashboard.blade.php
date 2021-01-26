<script>

    $(document).ready(function() {

        var i = 0;
        $('#add1').click(function() {

        if(i >= -5){
            $('#dynamic_field1').append('<tr id="row1'+i+'"><td><input type="text" name="course_learn[]" class="form-control course_learn_list" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove1">ลบ</button></td></tr>')
            i--

            // console.log(i);
        }
        });

        $(document).on('click', '.btn-remove1', function () {
            let button_id = $(this).attr('id');
        $('#row1'+button_id+'').remove();
        i++;
        // console.log(i);


        });
    });

</script>

<script>

    $(document).ready(function() {

    var i = 0;
    $('#add2').click(function() {
    if(i >= -5){
        $('#dynamic_field2').append('<tr id="row2'+i+'"><td><input type="text" name="course_result[]" class="form-control course_learn_list" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove2">ลบ</button></td></tr>')
        i--
        // console.log(i);
    }
    });

    $(document).on('click', '.btn-remove2', function () {
        let button_id = $(this).attr('id');
    $('#row2'+button_id+'').remove();
    i++;
    // console.log(i);
    });
    });

</script>

<script>

    $(document).ready(function() {

    var i = 0;
    $('#add3').click(function() {
    if(i >= -5){
        $('#dynamic_field3').append('<tr id="row3'+i+'"><td><input type="text" name="course_career[]" class="form-control course_learn_list" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove3">ลบ</button></td></tr>')
        i--
        // console.log(i);
    }
    });

    $(document).on('click', '.btn-remove3', function () {
        let button_id = $(this).attr('id');
    $('#row3'+button_id+'').remove();
    i++;
    // console.log(i);
    });
    });

</script>

<script>

    $(document).ready(function() {

    var i = 0;
    $('#add4').click(function() {
    if(i >= -5){
        $('#dynamic_field4').append('<tr id="row4'+i+'"><td><input type="text" name="course_youtube[]" class="form-control course_learn_list" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove4">ลบ</button></td></tr>')
        i--
        console.log(i);
    }
    });

    $(document).on('click', '.btn-remove4', function () {
        let button_id = $(this).attr('id');
    $('#row4'+button_id+'').remove();
    i++;
    console.log(i);
    });
    });

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
