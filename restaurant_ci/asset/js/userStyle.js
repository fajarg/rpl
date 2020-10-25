function myDropOrder(){
    var order =  document.getElementById("droporder");
    if(order.classList.contains("o-radius")){
        order.classList.remove("o-radius");
        order.classList.add("test");
    }else{
        order.classList.remove("test");
        order.classList.add("o-radius");
    }
    document.getElementById("myDropOrder").classList.toggle("show");
}

function myOtherMenu(){
    document.getElementById("otherMenu").classList.toggle("show");
}

