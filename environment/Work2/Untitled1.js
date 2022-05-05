// alert - document.write - console.log
var numeroSecreto = parseInt(Math.random() * 10)
var tentativas = 3


while (tentativas > 0) { 
  
var chute = parseInt(prompt("Vamos Começar! qual sua primeira opinião ?"))

if (numeroSecreto == chute) { 
  alert("Você é muito Bom! Voce acertou")
  break
} else if (chute > numeroSecreto) {
  alert("Vish ainda não, vou da uma Dica: O numero é menor ")
tentativas = tentativas - 1
} else if (chute < numeroSecreto) {
  alert("Vamos lá,você consegue vou te dar uma dica: O numero é Maior")
  tentativas = tentativas - 1
  } 
}
if (tentativas == 0) {
  document.querySelector('#resultado').innerHTML = "Você perdeu o número era " + numeroSecreto + ". Porem não desista, tente novamente! Você consegue! <3" 
}