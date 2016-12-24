/*  $(document).ready( 
    $("edit").click(
    function editUser(id="")
{
    $.ajax({
        type: 'POST',
        url: 'Ajaxdemo/editajaxdemo',
        success:function(data){
            $('#name').val(data.name);
            $('#address').val(data.address);
        }
    });
}));*/

/* function editUser(id){
    $.post("ajaxdemo/editajaxdemo", 
    {
            "id": id,
        }, 
        function (data) 

        {
            $('#name').val(data.name);
            $('#address').val(data.address);
            });
        }*/


function editUser(id='')
{
    //alert(id);
/*$.post("ajaxdemo/editajaxdemo", {
        "id": id,
    }, function (res) {
        
        if(res!=0){
           var d= $.parseJSON(res);
            $('#id1').val(d.id);
            $('#name').val(d.emailid);
            $('#address').val(d.address);
            
            };
        })*/

    };