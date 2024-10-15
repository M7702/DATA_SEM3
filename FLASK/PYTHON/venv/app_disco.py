from flask import Flask ,url_for , render_template, request

app = Flask(__name__)

@app.route('/')
def vw_index():
    return render_template('forform.html')



@app.route('/display',methods=['GET','POST'])
def vw_display():
    
    no = int(request.form['txtdata'])
    sqr_disc={}
    for i in range(1, no + 1):
        sqr_disc[i] = i**2
    return render_template('discresult.html',value = sqr_disc)



if __name__ == '__main__':
    app.run(debug=True)