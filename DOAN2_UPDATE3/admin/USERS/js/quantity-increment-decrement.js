
$(document).ready(function ()
{
    $('.add-to-cart-btn').click(function (e)
    {

        e.preventDefault();
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prof_id = $(this).val();
        $.ajax(
            {
                method :"POST",
                url:"../function/handlecart.php",
                data:
                    {
                        "prod_id":prof_id,
                        "prod_qty":qty,
                        "scope": "add"
                    },
                dataType:"dataType",
                success:function (response)
                {
                    if (response==401)
                    {
                        alert("login to");
                    }
                    else if (response==401)
                    {
                        alert("login to continue");

                    }
                    else if (response==500)
                    {
                        alertify.success("something went wrong!!!");
                    }
                }

            }
        )
    });

});
