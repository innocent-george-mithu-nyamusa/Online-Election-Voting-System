( document ).ready(function() { 
    
    var proceed = $("#proceed");
    
    var noproceed = $("#noproceed");

    proceed.hide();
    noproceed.show();

    setInterval(function() {

        $.ajax(
            {
                url: "getFingerprint.php",
                method: "post",
                dataType: "text",
                failed: function (){
                    console.log("Failed to get fingrprint");
                },
                success: function (data) {

                        if(data != "null") {
                            proceed.show();
                            noproceed.hide();
                        }else {
                            proceed.hide();
                            noproceed.show();
                        }
                }
            }
        );
    }, 1000);


});