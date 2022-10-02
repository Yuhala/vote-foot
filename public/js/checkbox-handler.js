/**
 * PYuhala
 * This script handles all the checkbox events: 
 * That is, makes sure the correct number of all player types is checked.
 * Once this is done, the user can validate their choice. 
 * All checked ids will then be sent to the player controller which 
 * processes the results and returns the results view with the updated votes.
 * 
 * TODO: reduce code redundance
 */

var totalSelected = 0;
var voteValidated = false;

var total = 0;

$(document).ready(function() {
    // All checked boxes
    var $checkboxes = $('input[type=checkbox]');



    var $checkedGoalies = $('input[name="idsGoalies[]"]');

    var textG = $("#numSelectedGoalies").text();
    var numG = parseInt(textG);


    var $checkedDefenders = $('input[name="idsDefenders[]"]');
    var textD = $("#numSelectedDefenders").text();
    var numD = parseInt(textD);


    var $checkedMids = $('input[name="idsMids[]"]');
    var textM = $("#numSelectedMids").text();
    var numM = parseInt(textM);


    var $checkedAttackers = $('input[name="idsAttackers[]"]');
    var textA = $("#numSelectedAttackers").text();
    var numA = parseInt(textA);


    // Handle goalie checkboxes
    if ('$checkedGoalies.fil') {
        $checkedGoalies.change(function() {
            if (this.checked) {

                numG += 1;
                totalSelected += 1;

                if ($checkedGoalies.filter(':checked').length == 4) {
                    $checkedGoalies.not(':checked').prop('disabled', true);
                }
            } else {

                $checkedGoalies.prop('disabled', false);
                numG -= 1;
                totalSelected -= 1;
            }

            $("#numSelectedGoalies").text(numG);

        });
    }

    // Handle defener checkboxes
    if ('$checkedDefenders.fil') {
        $checkedDefenders.change(function() {
            if (this.checked) {

                numD += 1;
                totalSelected += 1;

                if ($checkedDefenders.filter(':checked').length == 9) {
                    $checkedDefenders.not(':checked').prop('disabled', true);
                }
            } else {

                $checkedDefenders.prop('disabled', false);
                numD -= 1;
                totalSelected -= 1;
            }

            $("#numSelectedDefenders").text(numD);

        });
    }


    // Handle mid-fielder checkboxes
    if ('$checkedMids.fil') {
        $checkedMids.change(function() {
            if (this.checked) {

                numM += 1;
                totalSelected += 1;

                if ($checkedMids.filter(':checked').length == 6) {
                    $checkedMids.not(':checked').prop('disabled', true);
                }
            } else {

                $checkedMids.prop('disabled', false);
                numM -= 1;
                totalSelected -= 1;
            }

            $("#numSelectedMids").text(numM);

        });
    }


    // Handle mid-fielder checkboxes
    if ('$checkedAttackers.fil') {
        $checkedAttackers.change(function() {
            if (this.checked) {

                numA += 1;
                totalSelected += 1;

                if ($checkedAttackers.filter(':checked').length == 7) {
                    $checkedAttackers.not(':checked').prop('disabled', true);
                }
            } else {

                $checkedAttackers.prop('disabled', false);
                numA -= 1;
                totalSelected -= 1;
            }

            $("#numSelectedAttackers").text(numA);

        });
    }

    if ('$checkboxes.fil') {

        $checkboxes.change(function() {
            // Update validate button state
            if (totalSelected < 26) {
                $("#validateButton").prop('disabled', true);
            } else {
                $("#validateButton").prop('disabled', false);
            }
        });
    }




    /**
     * Get the selected players and send to player controller for processing. 
     * If not enough selected print alert message.
     */


    var errorMessage = "Sélectionnez 26 joeurs en totale!";

    var selectedIds = [];


    var form = $("#validate-vote-formxx");

    $(form).on('submit', function(event) {
        event.preventDefault();



        if (totalSelected > 26) {
            alert(errorMessage);
        } else {
            if (voteValidated) {
                alert("Votes déjà Validés!")
            } else {
                // Get all selected player ids
                $("input:checkbox[type=checkbox]:checked").each(function() { selectedIds.push($(this).val()); });
                voteValidated = true;
            }
            var stringedIds = JSON.stringify(selectedIds);
            // alert(stringedIds);

            // Send data to Player Controller
            var token = $("input[name='_token']").val();
            var url = $(this).attr("action");




            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                url: '{{URL::to("validate-vote")}}',
                method: "POST",
                data: {
                    _token: token,
                    dataType: 'json',
                    contentType: 'application/json',
                    'stringedIds': stringedIds,
                    success: function() {
                        window.alert(url);

                    }
                }


            });
        }

    });



    $("#validateButtonxx").click(function() {

        if (totalSelected < 26) {
            alert(errorMessage);
        } else {
            if (voteValidated) {
                alert("Votes déjà Validés!")
            } else {
                // Get all selected player ids
                $("input:checkbox[type=checkbox]:checked").each(function() { selectedIds.push($(this).val()); });
                voteValidated = true;

                var stringedIds = JSON.stringify(selectedIds);
                // alert(stringedIds);

                // Send data to Player Controller
                var token = $("input[name='_token']").val();
                var url = $(this).attr("data-url");


                //alert(">>>>>>>>>>> About to call AJAX >>>>>>>> ");
                //_token: '{{ csrf_token() }}',
                // $.ajax({
                //     header: {
                //         'X-CSRF-TOKEN': token
                //     },
                //     url: url,
                //     method: "POST",
                //     data: {
                //         _token: token,
                //         dataType: 'json',
                //         contentType: 'application/json',
                //         'stringedIds': stringedIds,
                //         success: function() {
                //             window.alert(url);
                //         }
                //     }


                // });
            }

        }


    });



});