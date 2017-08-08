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
    var username = document.frmItems.name.value;
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

    ajax.send("msg="+msg+"&myId="+myId+"&username="+username);

}

function DeleteItem(myId) {
    //prompt user if he really wants to delete item
    if (confirm("Are You Sure You Want To Delete This Item?")) {
        ajax = ajaxOrder();
        ajax.open("POST", "../include/deleteItem.php", true);


        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                alert("Successfully Delete Item");
                window.location.reload(true);
            }
        };

        //hide from url
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        ajax.send("myId=" + myId);

    }
    else {

    }
}

//function that adds items to database
//manage journal entries
//action means what CRUD to do
function UpdateProfile(myId, action1)
{
    var myId = myId;
    var username = document.frmItems.name.value = name;
    var age = document.frmItems.age.value = age;
    var weight = document.frmItems.weight.value = weight;
    var height = document.frmItems.height.value = height;

    ajax = ajaxOrder();

    if(action1 === 'EDIT')
    {
        ajax.open("POST", "../include/updateProfile.php", true);
    }

    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4)
        {
            alert(username);
            alert(age);
            alert(weight);
            alert(height);

            alert("Successfully Updated Profile");
            window.location.reload(true);
        }
    };

    //hide from url
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("name="+username+"&myId="+myId+"&age="+age+"&weight="+weight+"&height="+height);

}