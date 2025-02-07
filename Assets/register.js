
function fazerRegistro(){

    var username = document.getElementById('username').value ; 
    var password = document.getElementById('password').value ; 
    var data = {'username': username,'password': password}

    //console.log("Login: " + username + " Password: " + password)
    if(username && password){

        fetch("/register",{
            method:'POST',
            headers:{
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
            // segundo then pega a promise retornada pela decode do json.
        }).then((data)=> data.json()).then((data) => {
            if(data.success){
                alert(data.message)
                document.location = "/login?msg=Registro realizado com sucesso!";
            }else{
                alert(data.message)
            }
        }).catch((error)=>{
            console.log('Deu xablau!')
            alert('Oops, a requisição falhou!');
        })
    }else{
        alert('Preencha todos os campos!!')
    }
}