'''
Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato.
'''

produto1 = float(input('Qual preço do produto 1?\n'))
produto2 = float(input('Qual preço do produto 2?\n'))
produto3 = float(input('Qual preço do produto 3?\n'))

if produto1 < produto2 and produto1 < produto3:
    print("O mais barato é o produto 1.")
elif produto2 < produto1 and produto2 < produto3:
    print("O mais barato é o produto 2.")
elif produto3 < produto1 and produto3 < produto2:
    print("O mais barato é o produto 3.")
elif produto1 == produto2 and produto2 == produto3:
    print("São iguais")
