from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('reverse_number_form.html')

@app.route('/reverse-number', methods=['POST'])
def reverse_number():
    number = request.form['number']
    reversed_number = number[::-1]
    return f"The reverse of the number {number} is {reversed_number}."

if __name__ == '__main__':
    app.run(debug=True)
