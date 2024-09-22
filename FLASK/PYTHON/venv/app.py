from flask import Flask,render_template,redirect,url_for

#obj
app=Flask(__name__)

#decorater
@app.route('/')
def vw_home():
    # return 'hello world'
    # return render_template('index.html')
    return redirect('/product')

@app.route('/product')
def vw_prod():
    return "<h1>Product Page</h1>"

@app.route('/admin')
def vw_admin():
    return "admin page"

@app.route('/guest')
def vw_guest():
    return "Guest page"

@app.route('/user/<username>')
            # /user/riddhi -> output: guest page
            # /user/admin -> output: admin page
def vw_user(username):      #(username)<- parameter
    if username=="admin":
        return redirect(url_for('vw_admin'))
                #create 'admin' url then 'redirct' admin page
    else: 
        return redirect(url_for('vw_guest'))

if __name__=="__main__":
    app.run()

