import random
from atexit import register
from time import sleep
import os,json,re,sys
import threading,base64
import os,time,re,json,random
from datetime import datetime
from time import sleep,strftime
import requests
os.system("clear")
dau="\033[1;31m[\033[1;37m×.×\033[1;31m] \033[1;37m➩"
banner = f"""\033[1;32m
                ┏━━━┓  ┏━━━┓  ┏━━━┓  ┏━━━┓
                ┃┏━┓┃  ┃┏━┓┃  ┃┏━┓┃  ┗┓┏┓┃
                ┃┃━┗┛  ┃┃━┃┃  ┃┃━┃┃ ━ ┃┃┃┃
                ┃┃┏━┓  ┃┃━┃┃  ┃┃━┃┃ ━ ┃┃┃┃
                ┃┗┻━┃  ┃┗━┛┃  ┃┗━┛┃  ┏┛┗┛┃
                ┗━━━┛  ┗━━━┛  ┗━━━┛  ┗━━━┛
\033[1;39m              ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;39m              ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
\033[1;39m┌──────────────────────── ONEONE ────────────────────────┐
\033[1;32m║   \033[1;39mPYTHON VERSION\033[1;32m 3.0                                   \033[1;32m║
\033[1;32m║   \033[1;39mFACEBOOK           :  1767860155                     \033[1;32m║
\033[1;32m║   \033[1;39mZALO               :  ZALO.ME/G/                     \033[1;32m║
\033[1;32m║   \033[1;39mGITHUB             :  ONEONE                         \033[1;32m║
\033[1;32m║   \033[1;39mYOUTUBER           :  ONEONE ☊                       \033[1;32m║
\033[1;32m║   \033[1;39mTOOL WORLD         :  WIFI AND DATA                  \033[1;32m║
\033[1;39m└────────────────────────────────────────────────────────┘
"""
for h in banner:
       sys.stdout.write(h)
       sys.stdout.flush()
       sleep(0.0003)
menu=f"""
\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = =
\033[1;37m┌─────────────────────┐
\033[1;36m║  \033[1;37m    INPUT KEY      \033[1;36m║
\033[1;37m└─────────────────────┘
\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = """
for h in menu:
       sys.stdout.write(h)
       sys.stdout.flush()
       sleep(0.0005)
ngay=int(strftime('%d'))
key1=str(ngay*1246881818+2888181472) 
key = 'One/'+key1
keyv1 = 'Key Víp Tùy Chỉnh'
url = 'https://coder.azdigi.shop/?key='+key
token_link1s = '1c7e07696b389204971e85b18949906cbd603dcd'
link1s = requests.get(f'https://traffic1s.com/api?api={token_link1s}&url={url}').json()
if link1s['status']=="error": 
    print(link1s['message'])
    quit()
else:
    link_key=link1s['shortenedUrl']
h=open('keyDEV.txt',mode='a+')
h=open('keyDEV.txt',mode='r')
thien=h.read()
h.close()
print()
if thien== keyv1 or thien== key:
    print(dau,'\033[1;33mXIN CHÀO \033[1;32m! CHÚC BẠN CHẠY TOOL VUI VẺ...')
    sleep(1)
    exec(requests.get('https://run.mocky.io/v3/17bf0406-139f-46a9-ad1b-2a76aefb1da1').text)
else:
     print(dau,'\033[1;32mTOOL FREE !')
     print('\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = ')
print(dau,'\033[1;33mLINK LẤY API KEY LÀ:\033[1;31m '+link_key)
print('\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = ')
keynhap = input('\033[1;31m[\033[1;37m×.×\033[1;31m] \033[1;37m➩ \033[1;32mINPUT API KEY\033[1;33m ~>\033[1;36m ')
print("\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = ")
if keynhap == key or keynhap== keyv1:
    print(dau,'\033[1;32mAPI KEY ĐÚNG OPEN TOOL !')
    print("\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = ")
    sleep(2)
    h=open('keyDEV.txt',mode='w')
    h.write(keynhap)
    h.close()
    exec(requests.get('https://run.mocky.io/v3/17bf0406-139f-46a9-ad1b-2a76aefb1da1').text)
else:
    print(dau,'\033[1;33mAPI KEY SAI !')
    print("\033[1;97m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = ")
    