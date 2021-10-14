const firstname = document.querySelector('.firstname');
const lastname = document.querySelector('.lastname');
const age= document.querySelector('.age');
const btn = document.querySelector('.btn');
const password = document.querySelector('.password');
const formulario = document.getElementById('formulario');

// funcion para validad la edad que no sea menor de 10
const funct_edad = (e)=>{
	edad = e.target.value;

	if(edad<0){
		e.target.value = 10
	}else if (edad >90) {
		e.target.value = 90
	}
}

//funcion para poner un color de alerta de cajas vacias en el formulario
const border_input = (e ,atribute)=>{
	value = e.target.value;
	if(value === ""){
		atribute.style.borderColor = 'red'
	}else{
		atribute.style.borderColor = 'green'
	}
}

firstname.addEventListener('keyup', (e)=>{
	border_input(e,firstname)
})

lastname.addEventListener('keyup', (e)=>{
	border_input(e,lastname)
})

password.addEventListener('keyup', (e)=>{
	border_input(e,password)
})

age.addEventListener('keyup', (e)=>{
	funct_edad(e);
})

age.addEventListener('change', (e)=>{
	funct_edad(e);	
})
