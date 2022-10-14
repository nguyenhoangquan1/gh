const gia=document.getElementById("giasanpham");
gia.innerHTML=500;

    
/*tinh*/


function buttonhoadon()
{

    
    var m=500000;
    var x = document.getElementById("soluong").value;
    document.getElementById("canthanhtoan").innerHTML = x*m;
    var y = document.getElementById("magiamgia").value;
if(y=='123@abc')
{
    document.getElementById("canthanhtoan").innerHTML = (x*m)*(100-20)/100;
}

}