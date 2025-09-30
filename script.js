function somar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let soma = valor_1 + valor_2
    document.getElementById('resultado').innerText = "Resultado " + soma
    
    alert(soma)
}

function subtrair(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let subtracao = valor_1 - valor_2
    document.getElementById('resultado').innerText = "Resultado " + subtracao


    alert(subtracao)
}

function dividir(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let divisao = valor_1 / valor_2
    document.getElementById('resultado').innerText = "Resultado " + divisao


    alert(divisao)
}

function multiplicar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    let multiplica = valor_1 * valor_2
    document.getElementById('resultado').innerText = "Resultado " + multiplica


    alert(multiplica)
}