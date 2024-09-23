from flask import Flask,render_template,request

app = Flask(__name__)

@app.route('/')
def vw_home():
    return render_template('form2.html')

@app.route('/sqr',methods=["GET"])
def vw_square():
    num = int(request.args.get('num')) #get the value of the num from the form,request is the object of the request class , args is the dictionary which is used to get the value of the form , get is the function which is used to get the value of the form
    sqr = num * num
    return render_template('square.html',sqr=sqr) #pass the value of sqr to the square.html


if __name__ == '__main__':
    app.run()

# @app.route("/example", methods=["GET", "POST"], endpoint="example_endpoint", defaults={"page": 1}, strict_slashes=False, subdomain="api", host="example.com", provide_automatic_options=True)
# def example_view():
#     pass
# The URL rule is "/example".
# The route accepts both GET and POST methods.
# The endpoint name is "example_endpoint".
# The default value for page is 1.
# The route does not strictly enforce trailing slashes.
# The route is specific to the api subdomain.
# The route is specific to the example.com host.
# The OPTIONS method is automatically added.


