
$(document).ready(function(){
    $('#chk_all').click(function(){
        if(this.checked)
            $(".chkbox").prop("checked", true);
        else
            $(".chkbox").prop("checked", false);
    });
});

$(document).ready(function(){
    $('#delete_form').submit(function(e){
        if(!confirm("Confirm Delete?")){
            e.preventDefault();
        }
    });
});
