from flask import Flask ,url_for , render_template, request

app = Flask(__name__)

@app.route('/')
def vw_index():
    return render_template('forform.html')



@app.route('/display',methods=['GET','POST'])
def vw_display():
    no = int(request.form['txtdata'])
    no_list = []
    sqr_list = []
    for i in range(1, no + 1):
        no_list.append(i)
        sqr_list.append(i**2)
    return render_template('forresult.html',value = no_list,ans = sqr_list)



if __name__ == '__main__':
    app.run(debug=True)