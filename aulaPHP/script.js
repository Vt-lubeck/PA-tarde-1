function cadastrar(){
    const usuario = document.getElementById('usuario').value
    const senha = document.getElementById('senha').value
    const senhac = document.getElementById('senhac').value

    if(usuario && senha === senhac){
        localStorage.setItem(usuario,senha)
        return alert(`Usuário ${usuario} foi criado com sucesso!`)
    }
    else{
        return alert("Não foi possível criar o Usuário")
    }

}

function login(){
    const usuarioL = document.getElementById('usuarioL').value
    const senhaL = document.getElementById('senhaL').value

    let UsuarioExistente = localStorage.getItem(usua)

    if(UsuarioExistente){
        return alert("Usuário não existente")
    }
    
    if(usuarioL === UsuarioExistente && senhaL === UsuarioExistente){
        localStorage.getItem(usuario,senha)
        alert(`Usuário ${usuario} logado com sucesso!`)
    }

    else{
        return alert("Usúario e/ou senha incorretos")
    }

}