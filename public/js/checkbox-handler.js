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
var numG = 0;
var numD = 0;
var numM = 0;
var numA = 0;

function reInitializeTotal() {
    if (totalSelected >= 26) {
        totalSelected = 0;
    }
}

$(document).on("pageshow", function() {
    totalSelected = 0;
    numG = 0;
    numD = 0;
    numM = 0;
    numA = 0;

    $("#numSelectedGoalies").text(0);
    $("#numSelectedDefenders").text(0);
    $("#numSelectedMids").text(0);
    $("#numSelectedAttackers").text(0);
});

$(document).ready(function() {


    // Uncheck checkboxes on page reload
    $('input:checkbox').prop('checked', false);

    // All checked boxes
    var $checkboxes = $('input[type=checkbox]');



    var $checkedGoalies = $('input[name="idsGoalies[]"]');

    var textG = $("#numSelectedGoalies").text();
    //var numG = 0; //parseInt(textG);


    var $checkedDefenders = $('input[name="idsDefenders[]"]');
    var textD = $("#numSelectedDefenders").text();
    //var numD = 0; //parseInt(textD);


    var $checkedMids = $('input[name="idsMids[]"]');
    var textM = $("#numSelectedMids").text();
    //var numM = 0; //parseInt(textM);


    var $checkedAttackers = $('input[name="idsAttackers[]"]');
    var textA = $("#numSelectedAttackers").text();
    //var numA = 0; //parseInt(textA);

    /**
     * Initialize variables in case you are reloading the page or 
     * hit the back button.
     */


    //Initialize all counters on page reload or back button.
    // if ('$checkboxes.fil') {

    //     $checkboxes.change(function() {
    //         // Update validate button state
    //         if (totalSelected > 26 || numG > 4 || numD > 9 || numM > 6 || numA > 7) {
    //             totalSelected = 0;
    //             numG = 0;
    //             numD = 0;
    //             numM = 0;
    //             numA = 0;

    //             $("#numSelectedGoalies").text(0);
    //             $("#numSelectedDefenders").text(0);
    //             $("#numSelectedMids").text(0);
    //             $("#numSelectedAttackers").text(0);


    //         }
    //     });
    // }


    // Handle goalie checkboxes
    if ('$checkedGoalies.fil') {
        $checkedGoalies.change(function() {
            if (this.checked) {
                reInitializeTotal();

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

            if (numG == 6) {
                numG = 1;
            }
            $("#numSelectedGoalies").text(numG);

        });
    }

    // Handle defener checkboxes
    if ('$checkedDefenders.fil') {
        $checkedDefenders.change(function() {
            if (this.checked) {
                reInitializeTotal();
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

            if (numD == 10) {
                numD = 1;
            }
            $("#numSelectedDefenders").text(numD);

        });
    }


    // Handle mid-fielder checkboxes
    if ('$checkedMids.fil') {
        $checkedMids.change(function() {
            if (this.checked) {
                reInitializeTotal();
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

            if (numM == 7) {
                numM = 1;
            }
            $("#numSelectedMids").text(numM);

        });
    }


    // Handle mid-fielder checkboxes
    if ('$checkedAttackers.fil') {
        $checkedAttackers.change(function() {
            if (this.checked) {
                reInitializeTotal();
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

            if (numA == 8) {
                numA = 1;
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


    //reinitialize counters here

    $("#validateButtonxx").click(function() {


    });



});