from flask import Flask, request

app = Flask(__name__)

@app.route('/submit-data', methods=['POST'])
def submit_data():
    data = request.get_json()
    print(data)  # Do something with the data here
    return 'Data received'

if __name__ == '__main__':
    app.run()