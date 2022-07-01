import requests
import time
#from main import person_num as pnr
import main

url = "http://3.39.231.204/info_2.php"			#요청을 보낼 url을 입력.
num=main.a
while True:

	data = {				#보낼 데이터를 변수에 넣어준다. 이때, key:value 형식으로 입력.
		'id': num
	}
	time.sleep(10)
	response = requests.post(url, data=data)		#data라는 인자를 사용
	print("프린트", response.text)		#응답코드 출력

	break