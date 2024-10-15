from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('square_number_form.html')

@app.route('/square-number', methods=['POST'])
def square_number():
    number = int(request.form['number'])
    squared_number = number ** 2
    return f"The square of {number} is {squared_number}."

if __name__ == '__main__':
    app.run(debug=True)
