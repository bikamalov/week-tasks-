function student() {
	const bool = 'next';
	var StudentName = document.querySelector("#name").value;
	var StudentSurname =document.querySelector("#surname").value;
	if (!StudentName) {
		document.querySelector("#name").classList.add("error");
		bool='stop';
	}
	else{
		document.querySelector("#name").classList.remove("error");
	}
	if (!StudentSurname) {
		document.querySelector("#surname").classList.add("error");
		bool = 'stop';
	}
	else{
		document.querySelector("#surname").classList.remove("error");
	}
	if (bool=='next') {
		newTable();
	}
}
	function newTable(){
		var name = document.querySelector("#name").value;
		var surname =document.querySelector("#surname").value;
		var faculty = document.querySelector("#faculty").value;
		var table = document.querySelector("#students");
		var newRow = table.insertRow(table.rows.length);

		var c1=newRow.insertCell(0);
		var c2=newRow.insertCell(1);
		var c3=newRow.insertCell(2);

		c1.innerHTML = name;
		c2.innerHTML = surname;
		c3.innerHTML = faculty;

		document.querySelector("#name").value="";
		document.querySelector("#surname").value="";
		document.querySelector("#faculty").value="";
	}
	document.querySelector("#addStudent").addEventListener('click',student);
