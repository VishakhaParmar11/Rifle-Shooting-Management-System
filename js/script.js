let passwordInput=document.getElementById('password'),
cs=document.getElementById('login'),
icon=document.getElementById('eyeicon');

	function cspassword()
	{
		if(passwordInput.type === 'password')
		{
			passwordInput.type = 'text';
			icon.classlist.add("uil uil-eye-slash");
		}
		else
		{
			passwordInput.type = 'text';
			icon.classlist.remove("uil uil-eye-slash");
		}
	}

	function checkInput(){

	}

	cs.addEvenListener('click','cspassword',false);
	passwordInput.addEvenListener('keyup',checkInput,false);