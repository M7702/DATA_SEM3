from flask import Flask,render_template,redirect,url_for

app=Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('tutorial.html')

@app.route('/java')
def vw_java():
    return render_template('java.html')

@app.route('/python')
def vw_python():
    return render_template('python.html')

@app.route('/c')
def vw_c():
    return render_template('c.html')


if __name__=="__main__":
    app.run()