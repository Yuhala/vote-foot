
$(document).ready(function () {

    //Add CSRF token to headers
    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });



    $('input[type="checkbox"]').click(function () {

        const val = $(this).val()

        if ($(this).prop("checked") == true) {

            //alert(val + ' Checked and sending data to server')

            $.ajax({
                type: "POST",
                url: '{{url("/choiceUpdate")}}',
                data: { checkbox_val: val }
            })
                .done(function (msg) {
                    alert("Data: " + msg);
                });

        } else {

            //alert($(this).val() + ' unchecked');

            $.ajax({
                type: "POST",
                url: '{{url("/choiceUpdate")}}',
                data: { checkbox_val: val }
            })
                .done(function (msg) {
                    alert('Record removed');
                });

        }
    });
});
