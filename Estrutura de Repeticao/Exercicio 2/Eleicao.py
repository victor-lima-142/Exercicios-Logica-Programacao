'''
Numa eleição existem três candidatos. Faça um programa que peça o número total de eleitores. Peça para cada eleitor votar e
ao final mostrar o número de votos de cada candidato.
'''
import os

candidato_a = int(0)
candidato_b = int(0)
candidato_c = int(0)
nulos = int(0)
eleitores = int(input("Qual o número de eleitores?\n"))
os.system('cls')
i = 1
for i in range(1, eleitores + 1):
    os.system("cls")
    voto = input(
        f"Eleitor {i}. Vote em um candidato:\n[1] Candidato A\n[2] Candidato B\n[3] Candidato C\n")
    voto = int(voto)
    if voto == 1:
        candidato_a += 1
    elif voto == 2:
        candidato_b += 1
    elif voto == 3:
        candidato_c += 1
    else:
        print("Você escolheu um inválido. Seu voto será nulo.")
        nulos += 1

os.system("cls")

print("RESULTADO:\n")
print(f'Candidato A: {candidato_a}\n')
print(f'Candidato B: {candidato_b}\n')
print(f'Candidato C: {candidato_c}\n')
if candidato_a > candidato_b and candidato_a > candidato_c:
    print("Candidato A foi o Vencedor.")
elif candidato_b > candidato_a and candidato_b > candidato_c:
    print("Candidato B foi o Vencedor.")
elif candidato_c > candidato_a and candidato_c > candidato_b:
    print("Candidato C foi o Vencedor.")
else:
    print("Houve empate. Uma nova eleição será necessária.")
