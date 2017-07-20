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

//function that adds items to database
//manage journal entries
//action means what CRUD to do
function AddItem(myId, action1)
{
    var msg = document.frmItems.msg.value;
    var myId = myId;

    ajax = ajaxOrder();

    if(action1 === 'NEW')
    {
        ajax.open("POST", "../include/addItem.php", true);
    }
    else if(action1 === 'EDIT')
    {
        ajax.open("POST", "../include/updateItem.php", true);
    }

    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4)
        {
            alert("Successfully Added Item");
            window.location.reload(true);
        }
    };

    //hide from url
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("msg="+msg+"&myId="+myId);

}

function DeleteItem(myId)
{
    //prompt user if he really wants to delete item
    if(confirm("Are You Sure You Want To Delete This Item?"))
    {
        ajax = ajaxOrder();
        ajax.open("POST", "../include/deleteItem.php", true);


        ajax.onreadystatechange=function () {
            if(ajax.readyState == 4)
            {
                alert("Successfully Delete Item");
                window.location.reload(true);
            }
        };

        //hide from url
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        ajax.send("myId="+myId);

    }
    else
        {

        }
}