from flask import Flask,render_template,redirect,url_for 
# import flask class , render_template function , redirect function , url_for function
# render_template function is used to render the html file
# redirect function is used to redirect the page structure = redirect(url_for('function_name')) and redirect('templates/index.html')  is used to redirect the page to the index.html file
# url_for function is used to create the url of the function name 


#obj
app=Flask(__name__) 
#creating the object of the flask class and passing the name of the file, (__name__) is a special variable in python which is used to store the name of the file


#decorater
@app.route('/') 
# decorator is used to create the url of the function, @app is the object of the flask class, route is the function of the flask class
# .route('') create the url of the function


def vw_home():
    # return 'hello world'
    # return render_template('index.html')
    return redirect('/product') #redirect to the product page

@app.route('/product')
def vw_prod():
    return "<h1>Product Page</h1>"

@app.route('/admin')
def vw_admin():
    return "admin page"

@app.route('/guest')
def vw_guest():
    return "Guest page"


@app.route('/user/<username>') # /user/<username> -> output: admin page or guest page
            # /user/riddhi -> output: guest page
            # /user/admin -> output: admin page
            
def vw_user(username):      #(username)<- parameter
    if username=="admin":
        return redirect(url_for('vw_admin'))
                #create 'admin' url then 'redirct' admin page
    else: 
        return redirect(url_for('vw_guest'))


if __name__=="__main__":  #if the file is run directly then only this block will be executed

    app.run() #run the application

