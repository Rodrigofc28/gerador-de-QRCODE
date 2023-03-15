import random
import qrcode
import sys   #biblioteca que recebe parametros do terminal

parametro1 = sys.argv[1] #pegando o parametro


qr=qrcode.make(parametro1) #criando codigo qr com esse parametro

numaleatorio=random.random()  #gera um numero aleatorio
filename = f"{numaleatorio}qrcode.png"


print(filename) #enviando esse dado para controller 
qr.save(filename)#salvando o qrcode


