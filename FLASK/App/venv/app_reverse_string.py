from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('reverse_string_form.html')

@app.route('/reverse-string', methods=['POST'])
def reverse_string():
    input_string = request.form['string']
    reversed_string = input_string[::-1]
    return f"The reverse of the string '{input_string}' is '{reversed_string}'."

if __name__ == '__main__':
    app.run(debug=True)
