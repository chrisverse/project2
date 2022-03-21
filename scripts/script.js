function afficher() {

	var field1 = document.getElementById("field1");
	var field2 = document.getElementById("field2");
	
	if (field1.style.display === "none") {

		field1.style.display = "block";
		field2.style.display = "none";
	
	} else {

		field1.style.display = "none";
		field2.style.display = "block";
	
	}
}
function afficher2() {
	
	var field1 = document.getElementById("field1");
	var field2 = document.getElementById("field2");
	
	if (field2.style.display === "none") {
		
		field2.style.display = "block";
		field1.style.display = "none";
	
	} else {

		field2.style.display = "none";
		field1.style.display = "block";

	}

}

function controle(){

	var a = document.form.mat.value;
	var b = document.form.cni.value;
	var c = document.form.name.value;
	var d = document.form.pname.value;
	var e = document.form.date.value;
	var f = document.form.lieu.value;
	var g = document.form.add.value;
	var h = document.form.tel.value;

	if (a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '') {

	} else {
		var field1 = document.getElementById("field1");
		var field2 = document.getElementById("field2");
		
		if (field1.style.display === "none") {

			field1.style.display = "block";
			field2.style.display = "none";
		
		} else {

			field1.style.display = "none";
			field2.style.display = "block";
		
		}
	}

}

function controle2(){

	var a = document.form.stat.value;
	var b = document.form.corps.value;
	var c = document.form.ech.value;
	var d = document.form.min.value;
	var e = document.form.poste.value;
	var f = document.form.fonct.value;
	var g = document.form.actN.value;
	var h = document.form.actR.value;
	var i = document.form.grade.value;

	if (a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == '') {

	} else {

	}

}
