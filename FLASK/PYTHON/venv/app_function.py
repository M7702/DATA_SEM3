from flask import Flask,render_template,request

app = Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('oddSum.html')

@app.route('/num',methods=["GET"])
def vw_oddSum():
    ans = 0
    num = int(request.args.get('num'))
    for i in range(num):
        if i % 2 == 0:
            continue
        else:
            ans = ans + i
    return render_template('OddAns.html',ans=ans)


if __name__=="__main__":
    app.run()