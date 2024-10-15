from flask import Flask, render_template, request

app = Flask(__name__)

# Locally stored username and password (for demonstration purposes)
local_username = "admin"
local_password = "password123"

@app.route('/')
def index():
    return render_template('login_form.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']

    # Compare the input credentials with the local credentials
    if username == local_username and password == local_password:
        return f"Welcome, {username}!"
    else:
        return "Invalid username or password. Please try again."

if __name__ == '__main__':
    app.run(debug=True)
