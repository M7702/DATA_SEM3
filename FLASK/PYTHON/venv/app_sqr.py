from flask import Flask,render_template,request

app = Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('form2.html')

@app.route('/sqr',methods=["GET"])
def vw_square():
    num = int(request.args.get('num'))
    sqr = num * num
    return render_template('square.html',sqr=sqr)


if __name__ == '__main__':
    app.run()