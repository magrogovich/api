from flask import*
import json
import subprocess



app = Flask(__name__)


@app.route('/',methods=['GET'])
def homepage():
    with open("coordinates.txt","r") as data:
        coord = data.read().split(',')
        print(coord)

    dataset = {
        'X':coord[0],
        'Y':coord[1][:coord[1].find('\n')]
    }
    json_dump = json.dumps(dataset)
    return json_dump



if __name__ == '__main__':

    app.run(host='127.0.0.1', port=7777)