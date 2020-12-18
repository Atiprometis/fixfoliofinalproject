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

<script>
$('#addExp').click(async function () {
    // var generation: $('#generation').val();
    // var corse_name: $('#corse_name').val();
    // var location: $('#location').val();

    const {value: songRequest} = await swal({


    title: 'เพิ่มหลักสูตรที่เรียนจบ',
    html:

                '<ul class="m-0 p-0 text-left">'
                    +'<li class="m-0 p-0">'
                        +'<p class=" p-0 m-0 mt-2 mb-2">รุ่นที่</p>'
                        +'<input id="generation" name="generation" class="swal2-input m-0" required>'
                    +'</li>'
                    +'<li>'
                        +'<p class=" p-0 m-0 mt-2 mb-2">ชื่อหลักสูตร</p>'
                        +'<input id="corse_name" name="corse_name" class="swal2-input m-0" required>'
                    +'</li>'
                    +'<li>'
                        +'<p class=" p-0 m-0 mt-2 mb-2">สถานที่ศึกษาจบ</p>'
                        +'<input id="location" name="location" class="swal2-input m-0" required>'
                    +'</li>'
                +'</ul>',
                preConfirm: () => ({
                    generation: $('#generation').val(),
                    corse_name: $('#corse_name').val(),
                    location: $('#location').val(),
                    // window.location.href = '{{url('/generation/corse_name')}}/';

            })
    });
    if (songRequest){
        $.ajax({
               type:'POST',
               url:'/addExpp',
               data:{
                generation: songRequest.generation,
                corse_name: songRequest.corse_name,
                location: songRequest.location,
                _token: '{{csrf_token()}}',
               }
               ,
               success:function(data) {
            swal(
            "บันทึกข้อมูลสำเร็จ",
            "กำลังทำการบันทึกข้อมูล",
            "success"
            )
        },
        failure: function (data) {
            swal(
            "Internal Error",
            "Oops, your note was not saved.", // had a missing comma
            "error"
            )
        }
            });
        // Swal.fire(JSON.stringify(songRequest))

        // swal(`${songRequest.generation} ${songRequest.corse_name}`);
    }

    });
</script>
<script>
    $('#addExpwork').click(async function () {
        // var generation: $('#generation').val();
        // var corse_name: $('#corse_name').val();
        // var location: $('#location').val();

        const {value: songRequest} = await swal({


        title: 'เพิ่มหลักสูตรที่เรียนจบ',
        html:
                    '<ul class="m-0 p-0 text-left">'
                        +'<li class="m-0 p-0">'
                            +'<p class=" p-0 m-0 mt-2 mb-2">ตำแหน่ง</p>'
                            +'<input id="position" name="position" class="swal2-input m-0" placeholder="ระบุตำแหน่ง" required>'
                        +'</li>'
                        +'<li>'
                            +'<p class=" p-0 m-0 mt-2 mb-2">ชื่อบริษัท</p>'
                            +'<input id="company" name="company" class="swal2-input m-0" placeholder="ระบุชื่อบริษัท" required>'
                        +'</li>'
                        +'<li>'
                            +'<p class=" p-0 m-0 mt-2 mb-2">สถานที่ตั้งบริษัท</p>'
                            +'<input id="county" name="county" class="swal2-input m-0" placeholder="ระบุเขต" required>'
                            +'<input id="province" name="province" class="swal2-input m-0" placeholder="ระบุจังหวัด" required>'
                        +'</li>'
                        +'<li>'
                            +'<p class=" p-0 m-0 mt-2 mb-2">ระยะเวลาทำงาน</p>'
                            +'<input id="year" name="year" class="swal2-input m-0" placeholder="ระบุจำนวนปี" required>'
                            +'<input id="month" name="month" class="swal2-input m-0" placeholder="ระบุจำนวนเดือน" required>'
                        +'</li>'
                    +'</ul>',
                    preConfirm: () => ({
                        position: $('#position').val(),
                        company: $('#company').val(),
                        county: $('#county').val(),
                        province: $('#province').val(),
                        year: $('#year').val(),
                        month: $('#month').val(),
                        // window.location.href = '{{url('/generation/corse_name')}}/';

                })
        });
        if (songRequest){
            $.ajax({
                   type:'POST',
                   url:'/addExpp',
                   data:{
                    position: songRequest.position,
                    company: songRequest.company,
                    county: songRequest.county,
                    province: songRequest.province,
                    year: songRequest.year,
                    month: songRequest.month,
                    _token: '{{csrf_token()}}',
                   }
                   ,
                   success:function(data) {
                swal(
                "บันทึกข้อมูลสำเร็จ",
                "กำลังทำการบันทึกข้อมูล",
                "success"
                )
            },
            failure: function (data) {
                swal(
                "Internal Error",
                "Oops, your note was not saved.", // had a missing comma
                "error"
                )
            }
                });
            // Swal.fire(JSON.stringify(songRequest))

            // swal(`${songRequest.generation} ${songRequest.corse_name}`);
        }

        });
    </script>
{{-- <script>
    function getMessage() {
            $.ajax({
               type:'GET',
               url:'/test',
               data:'1123311',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }
</script> --}}
