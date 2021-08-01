var elem = document.getElementById("num");

elem.addEventListener("keydown",function(event){
    var key = event.which;
    if((key<48 || key>57) && key != 8) event.preventDefault();
});

elem.addEventListener("keyup",function(event){
    var value = this.value.replace(/,/g,"");
    this.dataset.currentValue=parseInt(value);
    var caret = value.length-1;
    while((caret-3)>-1)
    {
        caret -= 3;
        value = value.split('');
        value.splice(caret+1,0,",");
        value = value.join('');
    }
    this.value = value;
});
	var elem1 = document.getElementById("num1");

elem1.addEventListener("keydown",function(event){
    var key = event.which;
    if((key<48 || key>57) && key != 8) event.preventDefault();
});

elem1.addEventListener("keyup",function(event){
    var value = this.value.replace(/,/g,"");
    this.dataset.currentValue=parseInt(value);
    var caret = value.length-1;
    while((caret-3)>-1)
    {
        caret -= 3;
        value = value.split('');
        value.splice(caret+1,0,",");
        value = value.join('');
    }
    this.value = value;
});

function showValue()
{
  console.log(document.getElementById("num").dataset.currentValue);
}