document.form.screen.style.fontSize = "22px";
function insert(num){
	document.form.screen.value = document.form.screen.value + num;

}
function equals(){
	var exp = document.form.screen.value;
	if (exp) {
		document.form.screen.value = eval(exp);
	}
}

function Clrscn(){
	
	document.form.screen.value = "";
}
function back(){
	var exp = document.form.screen.value;
	document.form.screen.value = exp.substring(0,exp.length-1);
}