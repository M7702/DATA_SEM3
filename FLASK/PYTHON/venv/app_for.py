from flask import Flask ,url_for , render_template, request

app = Flask(__name__)

@app.route('/')
def vw_index():
    return render_template('forform.html')



@app.route('/display',methods=['GET','POST'])
def vw_display():
    no = int(request.form['txtdata'])
    no_list = []
    for i in range(1, no + 1):
        if i % 2 == 0:
            no_list.append(i)
    return render_template('forresult.html',value = no_list)






if __name__ == '__main__':
    app.run(debug=True)