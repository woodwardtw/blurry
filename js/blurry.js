if (document.querySelector('.users-network, .users')){

	//turn blur on by default 
	const table = document.querySelector('.users-network, .users');
	table.classList.add('blur-me');

	//make our blur button
	let btn = document.createElement("button");
	btn.innerHTML = "Status: blurred";
	btn.classList.add('blurry-button', 'active');
	document.body.appendChild(btn);
	
	//make our button click to add/remove class that blurs things
	btn.addEventListener("click", function (){
		table.classList.toggle('blur-me');
		btn.classList.toggle('active');
		if(btn.innerHTML === "Status: blurred"){
			btn.innerHTML = "Status: clear";
		} else {
			btn.innerHTML = "Status: blurred";
		}
	})
}

