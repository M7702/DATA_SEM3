from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('even_odd_form.html')

@app.route('/even-odd', methods=['POST'])
def even_odd():
    number = int(request.form['number'])
    result = "Even" if number % 2 == 0 else "Odd"
    return f"The number {number} is {result}."

if __name__ == '__main__':
    app.run(debug=True)
