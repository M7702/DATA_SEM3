from flask import Flask,render_template,redirect,url_for

app=Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('home.html')

@app.route('/products')
def vw_products():
    return render_template('products.html')

@app.route('/categories')
def vw_categories():
    return render_template('categories.html')

if __name__=="__main__":
    app.run()
