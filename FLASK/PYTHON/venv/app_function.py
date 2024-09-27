from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def vw_home():
    return render_template("oddSum.html")

@app.route('/display', methods=["GET"])
def vw_display():
    sum_odd = 0
    no = int(request.args.get('txtno'))
    for i in range(1, no + 1):
        if i % 2 != 0:
            sum_odd += i
    return render_template('OddAns.html', sum_odd=sum_odd)


if __name__=="__main__":
    app.run()