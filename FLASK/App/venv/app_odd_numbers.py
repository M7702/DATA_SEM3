from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('odd_numbers_form.html')

@app.route('/odd-numbers', methods=['POST'])
def odd_numbers():
    number = int(request.form['number'])
    odd_numbers_list = [str(n) for n in range(1, number + 1) if n % 2 != 0]
    return "Odd numbers up to {}: {}".format(number, ", ".join(odd_numbers_list))

if __name__ == '__main__':
    app.run(debug=True)
