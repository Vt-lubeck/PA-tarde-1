function cadastrar(){
    const usuario = document.getElementById('usuario').value
    const senha = document.getElementById('senha').value
    const senhac = document.getElementById('senhac').value

    if(usuario && senha === senhac){
        localStorage.setItem(usuario,senha)
        return alert(`Usuário ${usuario} foi criado com sucesso!`)
    }
    else{
        return alert("Usuário e/ou senha incorretos")
    }

}

function login(){
    const usuario = document.getElementById('usuario').value
    const senha = document.getElementById('senha').value

    let UsuarioExistente = localStorage.getItem(usuario)

    if(UsuarioExistente){
        return alert("Usuário não existente")
    }
    
    if(usuario && senha === UsuarioExistente){
        localStorage.getItem(usuario,senha)
        alert(`Usuário ${usuario} logado com sucesso!`)
        window.locationbar.href = "./home.html"
    }

    else{
        return alert("Usúario e/ou senha incorretos")
    }

}