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
    $('.my-select').selectpicker();
</script>
