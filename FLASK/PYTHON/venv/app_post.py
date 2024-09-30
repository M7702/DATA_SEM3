from flask import Flask ,url_for , render_template, request

app = Flask(__name__)

@app.route('/')
def vw_index():
    return render_template('post.html')



@app.route('/display',methods=['GET','POST'])
def vw_display():
    localPassword = "7702"
    localUsername = "M7702"
    Username = request.form['Username']
    Password = request.form['Password']
    if (localUsername == Username and localPassword == Password):
        flag = "welcome"
    else:
        flag = "username and password do not match"
    return render_template('postresult.html',value = flag)


    # return render_template('postresult.html',value = data)






if __name__ == '__main__':
    app.run(debug=True)