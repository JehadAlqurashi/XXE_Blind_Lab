
$("#idForm").submit(function(e) {

e.preventDefault(); 
let code ;
code = '<?xml version="1.0"?>\n'+
        "<info>\n"+
        "<email>"+$("input[name='email']").val()+"</email>\n"+
        "<password>"+$("input[name='password']").val()+"</password>\n"+
        "</info>";
$.ajax({
    type: "POST",
    url: "check.php",
    data: {
    	xml:code,
    }, 
    success: function(data)
    {
       $("#message").text(data);
    },
    dataType: "json"
});

});
