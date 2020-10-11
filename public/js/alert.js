$(document).ready(function (){

    $('.deleteForm').click(function (evt){

        evt.preventDefault();
        // var name=$(this).data("course_name");
        var form=$(this).closest("form");
        swal({

            title:"คุณต้องการลบข้อมูลหรือไม่ ?",
            text:"ถ้าหากลบแล้วจะไม่สามารถกู้คืนข้อมูลกลับมาได้",
            icon:"warning",
            buttons:true,
            dangerMode:true

        }).then((willDelete)=>{

            if(willDelete){

                form.submit();

            }

        });

    });

})
