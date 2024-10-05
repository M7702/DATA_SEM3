from flask import Flask ,url_for , render_template, request

app = Flask(__name__)

@app.route('/')
def vw_index():
    return render_template('sortform.html')



@app.route('/display',methods=['GET','POST'])
def vw_display():
    c1 = request.form['c1']
    c2 = request.form['c2']
    c3 = request.form['c3']
    country_list= [c1,c2,c3]
    country_list.sort()
    return render_template('sortresult.html',value = country_list)






if __name__ == '__main__':
    app.run(debug=True)