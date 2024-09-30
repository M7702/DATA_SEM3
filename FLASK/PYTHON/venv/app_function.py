from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def vw_home():
    return render_template("oddSum.html")

@app.route('/display', methods=["GET"])
def vw_display():
    text = request.args.get('txtno')
    # sum_odd = 0
    # sum_even = 0
    # no = int(request.args.get('txtno'))
    # for i in range(1, no + 1):
        
    #     if i % 2 != 0:
    #         sum_odd += i
    #     else:
    #         sum_even += i
    # return render_template('OddAns.html', sum_odd=sum_odd,sum_even= sum_even)

    
    # sum =0
    # while (no !=0):
    #     sum = sum +(no%10)
    #     no = no //10
    # return render_template('OddAns.html',ans = sum)


    reverse = text [::-1]
    if (reverse == text):
        flag = "Palindrone string"
    else:
        flag = "Not Palindrone string"
    return render_template('OddAns.html',ans = reverse,text = text, flag = flag)








if __name__=="__main__":
    app.run()