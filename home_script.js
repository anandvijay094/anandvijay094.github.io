function dt()
{
    var d=new Date;
    
    var dstring=d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds()+"    +0530";
    document.getElementById("tdte").innerHTML=dstring;
}
var state="unchanged";
function textChange()
{
    var b=document.getElementById("lgbtn");
    if(b.innerHTML=="Authenticating")
    {
        b.innerHTML="Log in";
        state="unchanged";
     
    }
       
   else
   {
    b.innerHTML="Authenticating";
    state="changed";
   }
   if(state=="changed")
{
    window.setTimeout(textChange,1500);
}    
}
