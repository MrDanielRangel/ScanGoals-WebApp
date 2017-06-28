function ajaxOrder()
{
    var xmlhttp = false;

    try{
        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
    } catch(e)
    {
        try
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(E){
            xmlhttp = false;
        }
    }

    if(!xmlhttp && typeof XMLHttpRequest != "undefined")
    {
        xmlhttp = new XMLHttpRequest();
    }

    return xmlhttp;

}


function AddStaff(myId, action1)
{
    var name = document.frmItems.name.value;

    ajax = ajaxOrder();

    if(action1 == 'new_staff')
    {
        ajax.open("POST", "php/addStaff.php", true);
    }
    else if(action1 == 'update_staff')
    {
        ajax.open("POST", "php/updateStaff.php", true);
    }


    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4)
        {
            alert("Successfully Added Staff");
            window.location.reload(true);
        }
    }

    //hide from url
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("name="+name+"&myId="+myId);


}

//function that adds items to database
//<!--PO, TO, Shipment, Complete, Partial, Qty, Signature, and date-->
//action means what CRUD to do
function AddItem(myId, action1)
{

    var po = document.frmItems.po.value;
    var to = document.frmItems.to1.value;
    var shipment = document.frmItems.shipment.value;
    var complete = document.frmItems.complete1.value;
    var partial = document.frmItems.partial1.vallue;
    var qty = document.frmItems.qty.value;
    var signature = document.frmItems.signature1.value;
    var date = document.frmItems.date1.value;
    var myId = myId;

    ajax = ajaxOrder();

    if(action1 == 'NEW')
    {
        ajax.open("POST", "php/addItem.php", true);
    }
    else if(action1 == 'EDIT')
    {
        ajax.open("POST", "php/updateItem.php", true);
    }

    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4)
        {
            alert("Successfully Added Item");
            window.location.reload(true);
        }
    }

    //hide from url
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("po="+po+"&to="+to+"&shipment="+shipment+"&complete="+complete+"&partial="+partial+"&qty="+qty+"&signature="+signature+"&date="+date+"&myId="+myId);

}

function DeleteItem(myId)
{
    //prompt user if he really wants to delete item
    if(confirm("Are You Sure You Want To Delete This Item?"))
    {
        ajax = ajaxOrder();
        ajax.open("POST", "php/deleteItem.php", true);


        ajax.onreadystatechange=function () {
            if(ajax.readyState == 4)
            {
                alert("Successfully Delete Item");
                window.location.reload(true);
            }
        }

        //hide from url
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        ajax.send("myId="+myId);

    }
    else
        {

        }
}

function DeleteStaff(myId)
{
    //prompt user if he really wants to delete item
    if(confirm("Are You Sure You Want To Delete This Staff?"))
    {
        ajax = ajaxOrder();
        ajax.open("POST", "php/deleteStaff.php", true);


        ajax.onreadystatechange=function () {
            if(ajax.readyState == 4)
            {
                alert("Successfully Delete Item");
                window.location.reload(true);
            }
        }

        //hide from url
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        ajax.send("myId="+myId);

    }
    else
    {

    }
}