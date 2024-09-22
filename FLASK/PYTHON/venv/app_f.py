from flask import Flask,render_template,request

app=Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('form.html')

@app.route('/display',methods=["GET"])
def vw_display():
    msg=request.args.get('txtmsg')
    print(msg)
    return render_template('result.html',msg=msg)
    

if __name__=="__main__":
    app.run()
