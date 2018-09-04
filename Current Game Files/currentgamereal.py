
import psutil
import threading
def currentprogram():
    openprogram = ""
    threading.Timer(10.0,currentprogram).start()
    for process in psutil.process_iter():
        if process.name() == 'csgo.exe':
            openprogram="csgo"
        elif process.name()=="fortnite.exe":
            openprogram="fortnite"
        #else:
            #openprogram="No Game Open"
    file = open("currentgame.txt", "w")
    print(openprogram)
    if openprogram =="":
        file.write("No Game Open")
    else:
        file.write(openprogram)
    file.close()
currentprogram()
