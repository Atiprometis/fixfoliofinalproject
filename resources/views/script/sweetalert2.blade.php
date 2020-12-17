<script>

$("#success").click(async function() {

//     const { value: inputcourse } =  await swal ({
// title: 'เพิ่มหลักสูตร',
// input: 'text',



// });
const { value: fruit } = await Swal.fire({
title: 'เพิ่มหลักสูตร',
input: 'text',
input: 'select',
inputOptions: {
  'Fruits': {
    apples: 'Apples',
    bananas: 'Bananas',
    grapes: 'Grapes',
    oranges: 'Oranges'
  },
  'Vegetables': {
    potato: 'Potato',
    broccoli: 'Broccoli',
    carrot: 'Carrot'
  },
  'icecream': 'Ice cream'
},
inputPlaceholder: 'Select a fruit',
showCancelButton: true,

})

if (fruit) {
Swal.fire(`You selected: ${fruit}`)
}


});


</script>

{{-- <script>
$(document).ready(function () {
    $('#delateimage').click(function (e) {
        e.preventDefault();
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
    });
});

</script> --}}

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
