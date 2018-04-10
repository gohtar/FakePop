
$(document).ready(function () {
    $("#popupOptions").on("change", function () {
        var id = $(this).val();
        if (id == 0) {
            return;
        }

        loadPopupSettings(id);        
    });

    function loadPopupSettings(id)
    {
        var data = {
            popup_id: id
        };

        axios.post('/create/settings',data)
        .then(function(response){      
            //Set the title
            $("#popupTitleInput").val(response.data.title);

            //Hide all of the "dynamic" settings
            $(".popup-setting").hide();         
            
            //Show the settings the popup uses
            response.data.uses.forEach(element => {
                $("#"+element).show();
            });
        })
        .catch(function(error){
            alert(error.message);            
        });
    }
});