<script>
    function signinCheck(){
        var element = document.getElementById("signincheck");
        element.classList.add("was-validated");

        // window.location.href = '/home';
    }


</script>
<script>
    function checkBoxsignup(){
        var checkBox = document.getElementById("checkboxsingup");
        document.getElementById("companysignup").required = true;
        document.getElementById("businesssignup").required = true;
    }
</script>




<script>
        function buttonprint(){
            window.print();
            var removeprint = document.getElementById("button-print");
            element.classList.add('d-none');

        }
</script>

<script>
    $('.my-select').selectpicker();
</script>

<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>

<script>

$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

//  var form = $(this).parents('form');
 var datalimit = 1
    $('#updatedataCourse').click(function (e) {
        e.preventDefault();
        console.log(datalimit);

        // var datalimit = $('#datalimit').data('datalimit');
        datalimit++;
        // form.submit();

        // alert(countmuns);
        // alert(datalimit);
        $.ajax({
            type: "GET",
            url: "/courses",
            data:{
                datalimit:datalimit,
                _token: '{{csrf_token()}}',
            },
            dataType: 'JSON',
            success: function (response) {
                console.log(response);
            },
            error: function (response, textStatus, errorThrown) {
            console.log(response);

            },
        });
    });

});



</script>

<script>
    $(document).ready(function () {
        // console.log(2);

        $.ajax({
            type: "POST",
            url: "/addidAthome",
            data:{
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                // console.log(response);
            },
            error: function (response, textStatus, errorThrown) {
            // console.log(response);

            },
        });
    });

</script>

<script>
    function updateTextInput(val) {
          document.getElementById('textInput').value=val;
        }
</script>

<script>
    // $('#selectBox option').eq(1).prop('selected', true);
</script>

<script>
    $('#validation').click(function (e) {
        e.preventDefault();

        $( '#checkregister' ).addClass( "was-validated" );
        // form.submit();

    });
</script>

<script>
    function CurrencyFormat(el) {
    let val = el.value.split('.').join('');
    el.value = val.toString().replace(/\B(?=(\d{2})+(?!\d))/g, ".");
}
</script>

<script>
    function yesnoCheck(that) {
    if (that.value == "มีคอร์สออนไลน์") {
//   alert("check");
        document.getElementById("ifYes").style.display = "block";
        document.getElementById("ifNo").style.display = "none";
    } else if (that.value == "ไม่มีคอร์สออนไลน์") {
        document.getElementById("ifYes").style.display = "none";
        document.getElementById("ifNo").style.display = "block";
    }

}
</script>
